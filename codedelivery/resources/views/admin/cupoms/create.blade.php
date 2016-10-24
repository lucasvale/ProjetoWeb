@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Novo Cupom </h3>

        @include('errors.check')


        {!! Form::open(['route'=>'admin.cupoms.store','class'=>'form-group']) !!}

        @include('admin.cupoms._form')

        <div class="form-group">
            {!! Form::submit('Criar Cupom',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>
@endsection
