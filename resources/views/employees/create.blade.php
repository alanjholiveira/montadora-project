@extends('layouts.modalForm')

@section('title', 'Novo Funcionario')

@section('content')

        @include('layouts._errors')

        <div class="card shadow">
            <div class="card-body">
                {!! Form::open(['route' => 'employees.store', 'method' => 'POST', 'data-remote' => 'true', 'id' => 'formInput']) !!}

                @include('employees._form')

                {!! Form::close() !!}
            </div>
        </div>

@endsection


