@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Novo Cliente </h3>

        @include('errors.check')

        {!! Form::open(['route'=>'admin.clients.store','class'=>'form-group']) !!}

        @include('admin.clients._form')

        <div class="form-group">
            {!! Form::submit('Criar Cliente',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>
@endsection
