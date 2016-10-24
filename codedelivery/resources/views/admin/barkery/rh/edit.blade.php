@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Editando Funcionário: {{$employee->user->name}}</h3>

        @include('errors.check')

        {!! Form::model($employee,['route'=>['admin.barkery.rh.update',$employee->id],'class'=>'form-group']) !!}

        @include('admin.barkery.rh._form')


        <div class="form-group">
            {!! Form::submit('Salvar Funcionário',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>
@endsection
