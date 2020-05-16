@extends('layouts.modalForm')

@section('title') Adicionar Nova Categoria @endsection

@section('content')

        @include('layouts._errors')

        <div class="card shadow">
            <div class="card-body">
                {!! Form::open(['route' => 'categories.store', 'method' => 'POST', 'data-remote' => 'true', 'id' => 'formInput']) !!}

                @include('categories._form')

                {!! Form::close() !!}
            </div>
        </div>

@endsection

