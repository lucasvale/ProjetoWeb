@extends('home')
@section('adm')
    <h2> Estoque</h2>
    <div class="row">
        <div class="col-lg-12">
            <a href="{{route('admin.barkery.stock.create')}}" class="btn btn-primary">Cadastrar Matéria-prima</a>
        </div>

        <div class="col-lg-6">

        </div>

    </div>

    <h3> Matéria-Prima Dispovível </h3>

    <div style="background-color: lightblue">

    <table class="table table-bordered table-responsive table-striped" >

        <thread>
            <tr>
                <th>Nome</th>
                <th>Data de Fabricação</th>
                <th>Data de Validade</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Tipo</th>
                <th>Lote</th>
                <th>Ação</th>
            </tr>
        </thread>
        <tbody>
        @foreach($feedStocks as $feedStock)
            <tr>
                <td>{{$feedStock->name}}</td>
                <td>{{$feedStock->manufactdate}}</td>
                <td>{{$feedStock->expiratedate}}</td>
                <td>{{$feedStock->qtd}}</td>
                <td>{{$feedStock->price}}</td>
                <td>{{$feedStock->type}}</td>
                <td>{{$feedStock->lote}}</td>

                <td>
                    <a href="{{route('admin.barkery.stock.reduce',['id'=>$feedStock->id])}}" class="btn btn-default btn-sm">Registrar Gasto</a>
                    <a href="{{route('admin.barkery.stock.add',['id'=>$feedStock->id])}}" class="btn btn-default btn-sm">Realizar Reposição</a>
                    <a href="{{route('admin.barkery.stock.edit',['id'=>$feedStock->id])}}" class="btn btn-default btn-sm">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

    </div>

    {{$feedStocks->render()}}
@endsection