@extends('layouts.modalView', ['delete' => false])

@section('title', 'Visualização')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    {!! Form::label('inputSituation', 'Situação Cadastral') !!}
                    <div class="form-group">
                        {!! Form::label('inputMatrix', 'Ativo') !!}
                        {{ Form::radio('situation', $employee->situation, $employee->situation == 'active', ['disabled']) }}
                        {!! Form::label('inputFilial', 'Inativo') !!}
                        {{ Form::radio('situation', $employee->situation, $employee->situation == 'inactive', ['disabled']) }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        {!! Form::label('inputName', 'Nome Completo') !!}
                        {!! Form::text('name', $employee->name, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('inputYear', 'Data de Nascimento') !!}
                        {!! Form::text('date_birth', $employee->date_birth, ['id' => 'datePick', 'class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        {!! Form::label('inputModel', 'Sexo') !!}
                        {!! Form::text('gender', $employee->gender, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        {!! Form::label('inputCpf', 'CPF') !!}
                        {!! Form::text('cpf', $employee->cpf, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        {!! Form::label('inputOccupation', 'Função') !!}
                        {!! Form::text('occupation', $employee->occupation, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        {!! Form::label('inputSalary', 'Salario') !!}
                        {!! Form::text('salary', $employee->salary, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('inputAddress', 'Endereço') !!}
                        {!! Form::text('address', $employee->address, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        {!! Form::label('inputZipCode', 'CEP') !!}
                        {!! Form::text('zip_code', $employee->zip_code, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('inputCity', 'Cidade') !!}
                        {!! Form::text('city', $employee->city, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        {!! Form::label('inputState', 'Estado') !!}
                        {!! Form::text('state', $employee->state, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        {!! Form::label('inputCountry', 'Pais') !!}
                        {!! Form::text('country', $employee->country, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('inputPhone', 'Telefone') !!}
                        {!! Form::text('phone', $employee->phone, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('inputEmail', 'E-Mail') !!}
                        {!! Form::text('email', $employee->email, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {!! Form::label('inputCompanyId', 'Filial') !!}
                        {!! Form::select('company_id', $companies, $employee->company_id, ['id' => 'company_id', 'class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
