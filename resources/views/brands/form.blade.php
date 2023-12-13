<div class="form-group">
    {!! Form::label('brands', '品牌：') !!}
    {!! Form::text('brands', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('headquarter','總部：') !!}
    {!! Form::text('headquarter',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('area','行政區域：') !!}
    {!! Form::text('area',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('year', '成立時間：') !!}
    {!! Form::text('year', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('html', '官方網站：') !!}
    {!! Form::text('html', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>