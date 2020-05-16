@extends('layouts.modalForm')

@section('title') Editar Automovel: {{$automobile->name}} @endsection

@section('content')
    <div class="card shadow">
        <div class="card-body">
            {!! Form::model($automobile, ['route' => ['automobiles.update', $automobile], 'method' => 'PUT', 'data-remote' => 'true',  'id' => 'formInput']) !!}

            @include('layouts._errors')

            @include('automobiles._form')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
