@extends('layouts.modalForm')

@section('title') Editar Automovel: {{$company->name}} @endsection

@section('content')
    <div class="card shadow">
        <div class="card-body">
            {!! Form::model($company, ['route' => ['companies.update', $company], 'method' => 'PUT', 'data-remote' => 'true',  'id' => 'formInput']) !!}

            @include('layouts._errors')

            @include('companies._form')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
