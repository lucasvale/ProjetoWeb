@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Meus Pedidos</h3>

        <a href="{{route('customer.order.create')}}" class="btn btn-default">
            Novo Pedido
        </a>
        <br><br>

        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Produtos</th>
                </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->total}}</td>
                    <td>{{$order->status}}</td>
                    <td>
                    <ul>
                        @foreach($order->items as $item)
                            <li>
                                {{$item->product->name}}
                            </li>
                        @endforeach
                    </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $orders->render() !!}
    </div>
@endsection