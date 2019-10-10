<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIssue;
use App\Http\Requests\UpdateIssue;
use Illuminate\Http\Request;
use App\Models\Issue;
//use GrahamCampbell\Markdown\Facades\Markdown;
use Auth;


class IssuesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = Issue::with('user','comments')
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('issues.index')->with('issues',$issues);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::check()){
            return redirect('/')->with('alert','没有执行此操作的权限，请先登录');
        }
        return view('issues.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreIssue $request)
    {
        Issue::create($request->all());
        return redirect('/')->with('notice','Issue新增成功~');
    }

    /**
     * Display the specified resource.
     *
     * @param Issue $issue
     * @return \Illuminate\Http\Response
     */
    public function show(Issue $issue)
    {
//        $content = Markdown::convertToHtml($issue->content);
        $comments = $issue->comments()->with('user')->get();
        return view('issues.show', compact('issue', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Issue $issue
     * @return \Illuminate\Http\Response
     */
    public function edit(Issue $issue)
    {
        return view('issues.edit')->with('issue',$issue);
    }

    /**
     * @param Request $request
     * @param Issue   $issue
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     */
    public function update(UpdateIssue $request, Issue $issue)
    {
        $issue->update($request->all());
        return redirect(route('issues.show', $issue->id))->with('notice', 'Issue 修改成功~');
    }

    /**
     * @param Issue $issue
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Issue $issue)
    {
        $issue->delete();
        return redirect('/')->with('alert', 'Issue 删除成功~');
    }
}
