@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Realizar Reposição: {{$feedstock->name}} </h3>

        @include('errors.check')

        {!! Form::open(['route'=>['admin.barkery.stock.replacement',$feedstock->id],'class'=>'form-group']) !!}

        @include('admin.barkery.estoque.spent_form')

        <div class="form-group">
            {!! Form::submit('Registrar Reposição',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>
@endsection
