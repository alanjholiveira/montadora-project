@extends('layouts.modalForm')

@section('title', 'Nova Empresa')

@section('content')

        @include('layouts._errors')

        <div class="card shadow">
            <div class="card-body">
                {!! Form::open(['route' => 'companies.store', 'method' => 'POST', 'data-remote' => 'true', 'id' => 'formInput']) !!}

                @include('companies._form')

                {!! Form::close() !!}
            </div>
        </div>

@endsection

