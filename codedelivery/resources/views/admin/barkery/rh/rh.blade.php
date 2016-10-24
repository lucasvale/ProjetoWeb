@extends('home')
@section('adm')
    <h2>Recursos Humanos</h2>
        <div class="row">
            <div class="col-lg-6">
                <a href="{{Route('admin.barkery.rh.create')}}" class="btn btn-primary">
                    Cadastar Novo Funcionário
                </a>

                <button class="btn btn-primary">
                    Registrar Faltas
                </button>

            </div>

            <div class="col-lg-6">

            </div>

        </div>

        <h3> Funcionários </h3>

        <table class="table table-bordered table-responsive table-striped">

            <thread>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>CEP</th>
                    <th>Salário</th>
                    <th>Ação</th>
                </tr>
            </thread>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{$employee->user->name}}</td>
                    <td>{{$employee->user->email}}</td>
                    <td>{{$employee->phone}}</td>
                    <td>{{$employee->address}}</td>
                    <td>{{$employee->city}}</td>
                    <td>{{$employee->state}}</td>
                    <td>{{$employee->zipcode}}</td>
                    <td>{{$employee->salary}}</td>

                    <td>
                        <a href="{{route('admin.barkery.rh.edit',['id'=>$employee->id])}}" class="btn btn-default btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>

        {{$employees->render()}}

@endsection