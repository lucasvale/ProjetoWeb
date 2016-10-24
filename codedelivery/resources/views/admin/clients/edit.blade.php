@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Editando Cliente: {{$client->user->name}}</h3>

        @include('errors.check')

        {!! Form::model($client,['route'=>['admin.clients.update',$client->id],'class'=>'form-group']) !!}

        @include('admin.clients._form')


        <div class="form-group">
            {!! Form::submit('Salvar Cliente',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>
@endsection
