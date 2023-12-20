<div class="form-group">
    {!! Form::label('car_sample', '車型：') !!}
    {!! Form::text('car_sample', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('bid', '品牌：') !!}
    {!! Form::select('bid', $brands, $brandSelected, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('car_modle','車款：') !!}
    {!! Form::text('car_modle',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('type','型號：') !!}
    {!! Form::text('type',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('power_type', '種類：') !!}
    {!! Form::text('power_type', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('price', '價格：') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('origin', '產地：') !!}
    {!! Form::text('origin', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('door', '車門：') !!}
    {!! Form::text('door', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('exhaust_volume', '排氣量：') !!}
    {!! Form::text('exhaust_volume', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
