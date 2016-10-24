@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Registrar Gasto: {{$feedstock->name}} </h3>

        @include('errors.check')

        {!! Form::open(['route'=>['admin.barkery.stock.spent',$feedstock->id],'class'=>'form-group']) !!}

        @include('admin.barkery.estoque.spent_form')

        <div class="form-group">
            {!! Form::submit('Registrar Gasto',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>
@endsection
