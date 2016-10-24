@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Editando Cupom: {{$cupoms->code}}</h3>

        @include('errors.check')

        {!! Form::model($cupoms,['route'=>['admin.cupoms.update',$cupoms->id],'class'=>'form-group']) !!}

        @include('admin.cupoms._form')


        <div class="form-group">
            {!! Form::submit('Salvar Cupom',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>
@endsection
