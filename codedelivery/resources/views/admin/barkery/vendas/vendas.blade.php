@extends('home')
@section('adm')
    <div class="row">

        <h2> Vendas </h2>

        <table class="table table-bordered table-responsive table-striped">

            <thread>
                <tr>
                    <th>Total</th>
                    <th>Data</th>
                    <th>Cliente</th>
                    <th>Itens</th>
                    <th>Entregador</th>
                    <th>Ação</th>
                </tr>
            </thread>

            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->total}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>{{$order->client->user->name}}</td>
                    <td>
                        <ul>
                            @foreach($order->items as $item)
                                <li>
                                    {{$item->product->name}}
                                </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        @if($order->deliveryman)
                            {{$order->deliveryman->name}}
                        @else
                            Sem Entregador
                        @endif
                    </td>
                    <td>
                        <a href="{{route('admin.orders.edit',['id'=>$order->id])}}" class="btn btn-default btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

        {{$orders->render()}}

    </div>
@endsection