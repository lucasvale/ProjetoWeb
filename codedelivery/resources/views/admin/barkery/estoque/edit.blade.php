@extends('layouts.app')

@section('content')


    <div class="container">

        <h3> Editando Matéria-Prima: {{$feedstock->name}}</h3>

        @include('errors.check')

        {!! Form::model($feedstock,['route'=>['admin.barkery.stock.update',$feedstock->id],'enctype'=>'multipart/form-data']) !!}


        @include('admin.barkery.estoque._form')


        <div class="form-group">
            {!! Form::submit('Salvar Saida',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
        @section('post-script')
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script>
                $( function() {
                    $( "#manufactdate" ).datepicker();
                    $( "#manufactdate" ).on( "change", function() {
                        $( "#manufactdate" ).datepicker( "option", "dateFormat","yy-mm-dd" );
                    });
                } );

                $( function() {
                    $( "#expiratedate" ).datepicker();
                    $( "#expiratedate" ).on( "change", function() {
                        $( "#expiratedate" ).datepicker( "option", "dateFormat","yy-mm-dd" );
                    });
                } );
            </script>
        @endsection

    </div>
@endsection
