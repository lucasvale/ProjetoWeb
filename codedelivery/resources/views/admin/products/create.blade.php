@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Novo Produto </h3>

        @include('errors.check')


        {!! Form::open(['route'=>'admin.products.store','class'=>'form-group']) !!}

        @include('admin.products._form')

        <div class="form-group">
            {!! Form::submit('Criar Produto',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>
@endsection
