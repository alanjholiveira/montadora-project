@extends('layouts.modalView', ['delete' => true])

@section('title', ' Você quer prosseguir?')

@section('content')

    @include('layouts._errors')

    <div class="card shadow">
        <div class="card-body">
            {!! Form::model($category, ['route' => ['categories.destroy', $category], 'method' => 'DELETE', 'data-remote' => 'false',  'id' => 'formInput']) !!}

            <div class="row">
                <p class="text-justify">Você está preste a excluir o registro "<p class="text-uppercase">{{$category->name}}</p>"</p>
                <p class="text-justify">Esse procedimento é irreversível!</p>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

@endsection

