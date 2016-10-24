@extends('layouts.app')

@section('content')

    <div class="container">

        <br> <br>


        <table class="table table-bordered table-responsive table-striped">

            <thread>
                <tr>
                    <th>Imagem</th>
                    <th>Produto</th>
                    <th>Categoria</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                </tr>
            </thread>

            <tbody>
            <tr>
                <td>
                    <img src="/uploads/products/{{$product->photo}}" style=" width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px; ">
                </td>
                <td>{{$product->name}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
            </tr>
            </tbody>

        </table>
        <div>
            <label>
                Quantidade:
                <input type="number" class="input-group-sm" name="quantidade">
            </label>
            <a href="{{route('customer.order.create')}}" class="btn btn-default">
                Comprar
            </a>

        </div>


    </div>
@endsection
