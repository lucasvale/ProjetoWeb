
<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('value','Valor:') !!}
    {!! Form::text('value',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Description','Descrição:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>

<div>
    {!! Form::label('date','Data:') !!}
    {!! Form::text('date',null, ['id' => 'date'] )!!}
</div>
