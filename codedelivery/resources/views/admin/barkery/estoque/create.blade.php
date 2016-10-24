@extends('layouts.app')

@section('content')

    <div class="container">

        <h3> Nova Matéria-Prima </h3>

        @include('errors.check')

        {!! Form::open(['route'=>'admin.barkery.stock.store','class'=>'form-group']) !!}

        @include('admin.barkery.estoque._form')

        <div class="form-group">
            {!! Form::submit('Salvar Matéria-Prima',['class'=>'btn btn-primary']) !!}
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
