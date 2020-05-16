@extends('layouts.modalView', ['delete' => true])

@section('title', ' Você quer prosseguir?')

@section('content')

    @include('layouts._errors')

    <div class="card shadow">
        <div class="card-body">
            {!! Form::model($automobile, ['route' => ['automobiles.destroy', $automobile], 'method' => 'DELETE', 'data-remote' => 'false',  'id' => 'formInput']) !!}

            <div class="row">
                <p>Você está preste a excluir o registro "<p class="text-uppercase">{{$automobile->name}} </p>" .</p>
                <p> Esse procedimento é irreversível!</p>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

@endsection

