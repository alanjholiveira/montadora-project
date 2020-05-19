@extends('layouts.modalView', ['delete' => false])

@section('title', 'Visualização')

@section('content')
    @include('layouts._messages')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('inputName', 'Nome do Veiculo') !!}
                        {!! Form::text('name', $automobile->name, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        {!! Form::label('inputYear', 'Ano') !!}
                        {!! Form::text('year', $automobile->year, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('inputModel', 'Modelo') !!}
                        {!! Form::text('model', $automobile->model, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('inputColor', 'Cor') !!}
                        {!! Form::text('color', $automobile->color, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('inputChassisNumber', 'Numéro do Chassis') !!}
                        {!! Form::text('chassis_number', $automobile->chassis_number, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    {!! Form::label('inputCatId', 'Categoria') !!}
                    <div class="form-group">

                        {!! Form::select('cat_id', $categories, $automobile->cat_id, ['id' => 'cat_id', 'class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    {!! Form::label('inputCompanyId', 'Filial') !!}
                    <div class="form-group">

                        {!! Form::select('company_id', $companies, $automobile->company_id, ['id' => 'company_id', 'class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
