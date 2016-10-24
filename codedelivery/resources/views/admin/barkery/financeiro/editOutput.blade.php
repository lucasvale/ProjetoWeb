@extends('layouts.app')

@section('content')


    <div class="container">

        <h3> Editando Saida: {{$output->name}}</h3>

        @include('errors.check')

        {!! Form::model($output,['route'=>['admin.barkery.finances.updateOutput',$output->id],'enctype'=>'multipart/form-data']) !!}


        @include('admin.barkery.financeiro.output_form')


        <div class="form-group">
            {!! Form::submit('Salvar Saida',['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
        @section('post-script')
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script>
                $( function() {
                    $( "#date" ).datepicker();
                    $( "#date" ).on( "change", function() {
                        $( "#date" ).datepicker( "option", "dateFormat","yy-mm-dd" );
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
