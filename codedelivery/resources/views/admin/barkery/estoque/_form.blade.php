
<div class="form-group">
    {!! Form::label('Provider','Provedor:') !!}
    {!! Form::select('provider_id',$providers,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Description','Descrição:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('qtd','Quantidade:') !!}
    {!! Form::text('qtd',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Type','Tipo:') !!}
    {!! Form::text('type',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Lote','Lote:') !!}
    {!! Form::text('lote',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Price','Preço:') !!}
    {!! Form::text('price',null,['class'=>'form-control']) !!}
</div>

<div>
    {!! Form::label('date','Data de Validade:') !!}
    {!! Form::text('expiratedate',null, ['id' => 'expiratedate'] )!!}
</div>

<div>
    {!! Form::label('date','Data de Fabricação:') !!}
    {!! Form::text('manufactdate',null, ['id' => 'manufactdate'] )!!}
</div>