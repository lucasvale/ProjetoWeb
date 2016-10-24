<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                    <a href="{{ url('/carrinho') }}">Carrinho</a>
                </div>
            @endif

                <div class="content">
                    <div class="title m-b-md">
                        SGP
                    </div>
                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>

                    <div class="col-md-2">
                        <div class="lead"  >
                            Categories
                        </div>
                        <div>
                            @foreach($categories as $category)
                                <ul class="list-unstyled lead" >
                                    <li>
                                        <a href="{{route('customer.categories.description',$category->id)}}" style="color:#ce8483 "> {{$category->name}} </a>
                                    </li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="lead">
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
    </body>
</html>
