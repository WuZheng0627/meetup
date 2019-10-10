{!! Form::hidden('user_id',Auth::id()) !!}
<fidldset>
    <div class="am-form-group">
        {{ Form::label('标题') }}
        {{ Form::text('title',null,['placeholder'=>'输入活动标题']) }}
    </div>
    <div class="am-form-group">
        {{ Form::label('内容') }}
        {{ Form::textarea('content',null,['rows'=>'5','placeholder'=>'填写活动内容，支持markdown。']) }}
    </div>

        {{ Form::submit('提交',['class'=>'am-btn am-btn-default']) }}
</fidldset>