@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <img src="/uploads/avatars/{{$user->avatar}}" style=" width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px; ">
                <h2> Perfil de {{$user->name}}  </h2>
                <form enctype="multipart/form-data" action="/profile" method="post">
                    <label>Atualize a Imagem do Perfil</label>
                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            </div>
        </div>
    </div>
@endsection