@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading" style=" background-color: lightblue; align-items: center; text-align: center;  ">
                    <h3>Administração da Padaria</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2 panel-title " >
            <a style="text-align: match-parent" href="{{route('admin.barkery.rh.index')}}">
                Recursos Humanos
                <img class="img-responsive" src="/images/rh.png" width="180px" >
            </a>
        </div>
        <div class="col-md-2 panel-title ">
            <a  href="{{route('admin.barkery.production.index')}}">
                Produção
                <img class="img-responsive" src="/images/producao.png" width="180px" >
            </a>
        </div>

        <div class="col-md-2 panel-title">
            <a  href="{{route('admin.barkery.stock.index')}}">
                Estoque
                <img class="img-responsive" src="/images/estoque.png" width="180px" >
            </a>
        </div>
        <div class="col-md-2 panel-title ">
            <a  href="{{route('admin.barkery.finances.index')}}" >
                Financeiro
                <img class="img-responsive" src="/images/financeiro.png" width="180px" >
            </a>
        </div>
        <div class="col-md-2 panel-title ">
            <a  href="{{route('admin.barkery.sales.index')}}">
                Vendas
                <img class="img-responsive" src="/images/vendas.png" width="180px" >
            </a>
        </div>
        <div class="col-md-1"></div>
    </div>
    @yield('adm')
</div>
@endsection
