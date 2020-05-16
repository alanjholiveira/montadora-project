@extends('layouts.modalForm')

@section('title') Editar Categoria {{$category->name}} @endsection

@section('content')
    <div class="card shadow">
        <div class="card-body">
            {!! Form::model($category, ['route' => ['categories.update', $category], 'method' => 'PUT', 'data-remote' => 'true',  'id' => 'formInput']) !!}

            @include('layouts._errors')

            @include('categories._form')

            {!! Form::close() !!}
        </div>
    </div>
@endsection
