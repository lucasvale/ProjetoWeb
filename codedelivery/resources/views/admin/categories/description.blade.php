@extends('layouts.app')

@section('content')

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .box {
            background-color: #eeeef2;
            padding: 10px 10px 12px;
            text-align: center;
        }
        .prod {
            overflow: hidden;
            padding-top: 47px;
        }
        .gal {
            display: block;
            margin-bottom: 12px;
            background:  center center no-repeat #761c19;
        }
        .grid_3{
            display: inline;
            float: left;
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
    <div class="container">


        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-2">
                    <div class="lead"  >
                        Categoria
                    </div>
                    <div>
                            <ul class="list-unstyled lead " >
                                <li>
                                    <a  style="color:#ce8483 "> {{$category->name}} </a>
                                </li>
                            </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="lead" style="" >
                        Products
                    </div>
                    <div class="prod">
                        @foreach($products as $product)
                            <div class="grid_3">
                                <div class="box">
                                    <div class="maxheight"><a href="{{route('customer.products.description',$product->id)}}" class="gal"><img src="/uploads/products/{{$product->photo}}" alt=""></a> <a style="color: #080808;"  href="#"> {{$product->name}}</a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

