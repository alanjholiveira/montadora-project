@extends('layouts.modalForm')

@section('title') Editando Funcionario: {{$employee->name}} @endsection

@section('content')
    <div class="card shadow">
        <div class="card-body">
            {!! Form::model($employee, ['route' => ['employees.update', $employee], 'method' => 'PUT', 'data-remote' => 'true',  'id' => 'formInput']) !!}

            @include('layouts._errors')

            @include('employees._form')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
