@extends('home')
@section('adm')

        <h2> Produção</h2>
        <a href="{{route('admin.products.create')}}" class="btn btn-primary"> Cadastrar o Que Foi Produzido</a>
        <a href="#" class="btn btn-primary"> Registrar Disperdicio</a>
    <div class="container">
        <h3>Produtos</h3>
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