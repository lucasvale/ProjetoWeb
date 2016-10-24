@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <img src="/uploads/products/{{$product->photo}}" style=" width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px; ">
                <h2>  {{$product->name}}  </h2>
                <form enctype="multipart/form-data" action="/admin/products/update/{{$product->id}}" method="post">
                    <label>Atualize a Imagem do Produto</label>
                    <input type="file" name="photo">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
        </div>
    </div>


    <div class="container">

        <h3> Editando Produto: {{$product->name}}</h3>

        @include('errors.check')

        {!! Form::model($product,['route'=>['admin.products.update',$product->id],'enctype'=>'multipart/form-data']) !!}


        @include('admin.products._form')


        <div class="form-group">
            {!! Form::submit('Salvar Produto',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}


    </div>
@endsection
