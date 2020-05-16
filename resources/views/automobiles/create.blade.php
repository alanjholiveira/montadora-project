@extends('layouts.modalForm')

@section('title', 'Novo Automóvel')

@section('content')

        @include('layouts._errors')

        <div class="card shadow">
            <div class="card-body">
                {!! Form::open(['route' => 'automobiles.store', 'method' => 'POST', 'data-remote' => 'true', 'id' => 'formInput']) !!}

                @include('automobiles._form')

                {!! Form::close() !!}
            </div>
        </div>

@endsection

