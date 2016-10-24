@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Nova Categoria </h3>

        @include('errors.check')


        {!! Form::open(['route'=>'admin.categories.store','class'=>'form-group']) !!}

        @include('admin.categories._form')

        <div class="form-group">
            {!! Form::submit('Criar Categoria',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>
@endsection
