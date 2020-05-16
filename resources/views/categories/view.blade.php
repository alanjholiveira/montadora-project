@extends('layouts.modalView', ['delete' => false])

@section('title', 'Visualização')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="form-group row">
                <div class="col-lg-12">
                    {!! Form::label('inputFirstName', 'Nome da Categoria:') !!}
                    {!! Form::text('name', $category->name, ['class' => 'form-control', 'required', 'disabled']) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
