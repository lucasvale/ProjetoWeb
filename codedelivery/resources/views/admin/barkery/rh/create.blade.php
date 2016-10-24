@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Novo Funcionário </h3>

        @include('errors.check')

        {!! Form::open(['route'=>'admin.barkery.rh.store','class'=>'form-group']) !!}

        @include('admin.barkery.rh._form')

        <div class="form-group">
            {!! Form::submit('Salvar Funcionário',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>
@endsection
