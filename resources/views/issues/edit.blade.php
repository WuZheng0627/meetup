@extends('layouts.app')


@section('content')
<div class="am-container">
    <div class="header">
        <div class="am-g">
            <h1>修改活动</h1>
        </div>
        <hr>
    </div>

    {{--<form class="am-form" action="{{route('issues.update',$issue->id)}}" method="post">--}}
    {!! Form::model($issue,['route'=>['issues.update',$issue->id],'method'=>'put','class'=>'am-form']) !!}
        @include('issues._form')
    {!! Form::close() !!}
       {{--{{ csrf_field()}}--}}
       {{--{{ method_field('put') }}--}}
       {{--<fieldset>--}}
          {{--<div class="am-form-group">--}}
              {{--<label>标题</label>--}}
              {{--<input type="text" value="{{ old('title', $issue->title)}}" placeholder="输入活动标题" name="title">--}}
          {{--</div>--}}

          {{--<div class="am-form-group">--}}
              {{--<label>内容</label>--}}
              {{--<textarea rows="5" name="content">{{ old('content', $issue->content)}}</textarea>--}}
          {{--</div>--}}

          {{--<button type="submit" class="am-btn am-btn-default">提交</button>--}}
      {{--</fieldset>--}}
    {{--</form>--}}
</div>
@endsection
