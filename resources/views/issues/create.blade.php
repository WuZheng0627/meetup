@extends('layouts.app')


@section('content')
<div class="am-container">
    <div class="header">
        <div class="am-g">
            <h1>添加新活动</h1>
        </div>
        <hr>
    </div>
    {!! Form::open(['route'=>'issues.store','class'=>'am-form']) !!}
        @include('issues._form')
       {{--{{csrf_field()}}--}}
       {{--<fieldset>--}}
           {{--<input type="hidden" name="user_id" value="{{Auth::id()}}">--}}
           {{--<div class="am-form-group">--}}
              {{--<label>标题</label>--}}
              {{--<input type="text" placeholder="输入活动标题" name="title" value= "{{old('title')}}">--}}
          {{--</div>--}}

          {{--<div class="am-form-group">--}}
              {{--<label>内容</label>--}}
              {{--<textarea rows="5" name="content">{{old('content')}}</textarea>--}}
          {{--</div>--}}

          {{--<button type="submit" class="am-btn am-btn-default">提交</button>--}}
      {{--</fieldset>--}}
    {!! Form::close() !!}
</div>
@endsection
