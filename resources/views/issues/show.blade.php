@extends('layouts.app')
@section('stylesheets')
    <link rel="stylesheet" href="/assets/vendor/highlight/default.min.css">
    <link rel="stylesheet" href="/assets/vendor/atwho/jquery.atwho.min.css">

@endsection


@section('content')
<div class="issue-heading">
    <div class="am-container">
        Laravel Meetup
        @if(Auth::check()&&Auth::user() == $issue->user)
            <a href="{{route('issues.destroy', $issue->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"  type="button" class="am-btn am-btn-danger am-radius am-btn-sm">Destroy</a>
            {{--<a href="{{route('issues.edit',$issue->id)}}" type="button" class="am-btn am-btn-primary am-radius am-btn-sm">Edit</a>--}}
            {!! link_to_route('issues.edit', 'Edit', $issue->id , ['class' => 'am-btn am-btn-primary am-radius am-btn-sm' ]) !!}
        @endif
    </div>
</div>

<div class="am-container">
    <div class="am-comment-bd"><p>{!! markdown( $issue->content) !!}</p></div>
    <ul class="am-comments-list am-comments-list-flip">

        @foreach($comments as $comment)
            @include('shared._comment')
        @endforeach
    </ul>
    @if(Auth::check())
    {!! Form::open(['route'=>'comments.store','class'=>'am-form']) !!}
    {!! Form::hidden('issue_id',$issue->id) !!}
    {!! Form::hidden('user_id',Auth::id()) !!}
    <fieldset>
        <div class="am-form-group">
            {{ Form::textarea('content',null,['rows'=>'5','placeholder'=>'填写评论内容，支持markdown。']) }}
        </div>
        <p>
            {{ Form::submit('提交',['class'=>'am-btn am-btn-default','id'=>'store-comment']) }}
        </p>
    </fieldset>
    {!! Form::close() !!}
    @else
        <p>
            <a href="{{route('login')}}" class="am-btn am-btn-secondary am-btn-block">
                <span class="am-icon-user"></span> 登录后发评论
            </a>
        </p>
    @endif
</div>
@section('scripts')
    <script src="/assets/vendor/atwho/jquery.caret.min.js"></script>
    <script src="/assets/vendor/atwho/jquery.atwho.min.js"></script>
    <script src="/assets/vendor/hotkeys/jquery.hotkeys.js"></script>
    <script src="/assets/vendor/highlight/ht.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="/assets/js/show.js"></script>
@endsection

@endsection

