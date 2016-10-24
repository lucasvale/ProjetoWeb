@extends('home')
@section('adm')
    <h2> Financeiro</h2>
    <a href="{{route('admin.barkery.finances.createInput')}}" class="btn btn-primary"> Adicionar Nova Entrada</a>
    <a href="{{route('admin.barkery.finances.createOutput')}}" class="btn btn-primary"> Adicionar Nova Saída</a>
    <div class="row">
    <div class="col-lg-6" >
        <h3>Entradas</h3>
        <table class="table table-bordered table-responsive table-striped">

            <thread>
                <tr>
                    <th>Data</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Descricao</th>
                    <th>Ação</th>
                </tr>
            </thread>

            <tbody>
            @foreach($entradas as $entrada)
                <tr>
                    <td>{{$entrada->date}}</td>
                    <td>{{$entrada->name}}</td>
                    <td>{{$entrada->value}}</td>
                    <td>{{$entrada->description}}</td>
                    <td>
                        <a href="{{route('admin.barkery.finances.editInput',['id'=>$entrada->id])}}" class="btn btn-default btn-sm">Editar</a>
                        <a href="{{route('admin.barkery.finances.destroyInput',['id'=>$entrada->id])}}" class="btn btn-default btn-sm">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
        {{$entradas->render()}}
    </div>
    <div class="col-lg-6" >
        <h3>Saídas</h3>
        <table class="table table-bordered table-responsive table-striped">

            <thread>
                <tr>
                    <th>Data</th>
                    <th>Data de Vencimento</th>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Descricao</th>
                    <th>Ação</th>
                </tr>
            </thread>

            <tbody>
            @foreach($saidas as $saida)
                <tr>
                    <td>{{$saida->date}}</td>
                    <td>{{$saida->expiratedate}}</td>
                    <td>{{$saida->name}}</td>
                    <td>{{$saida->value}}</td>
                    <td>{{$saida->description}}</td>
                    <td>
                        <a href="{{route('admin.barkery.finances.editOutput',['id'=>$saida->id])}}" class="btn btn-default btn-sm">Editar</a>
                        <a href="{{route('admin.barkery.finances.destroyOutput',['id'=>$saida->id])}}" class="btn btn-default btn-sm">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
        {{$saidas->render()}}
    </div>

    </div>


@endsection