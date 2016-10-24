@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Produtos</h3>
            <a href="{{route('admin.products.create')}}" class="btn btn-default"> Novo Produto</a>
        <br> <br>

        @if(old('name'))

            <div class="alert alert-success">
                <strong>Sucesso!</strong>
                O produto {{ old('name') }} foi adicionado.
            </div>

        @endif

        <table class="table table-bordered table-responsive table-striped">

            <thread>
                <tr>
                    <th>ID</th>
                    <th>Produto</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ação</th>
                </tr>
            </thread>

            <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="{{route('admin.products.edit',['id'=>$product->id])}}" class="btn btn-default btn-sm">Editar</a>
                    <a href="{{route('admin.products.destroy',['id'=>$product->id])}}" class="btn btn-default btn-sm">Remover</a>
                </td>
            </tr>
            @endforeach
            </tbody>

        </table>


        {{$products->render()}}

    </div>
@endsection
