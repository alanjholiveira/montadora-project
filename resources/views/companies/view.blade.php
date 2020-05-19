@extends('layouts.modalView', ['delete' => false])

@section('title', 'Visualização')

@section('content')
    @include('layouts._messages')
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 align-self-center">
                    <div class="form-group">
                        {!! Form::label('inputMatrix', 'MATRIZ') !!}
                        {!! Form::radio('matrix', $company->matrix, $company->matrix == 1, ['disabled']) !!}
                        {!! Form::label('inputFilial', 'FILIAL') !!}
                        {!! Form::radio('matrix',$company->matrix, $company->matrix == 0, ['disabled']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        {!! Form::label('inputName', 'Razão Social') !!}
                        {!! Form::text('name', $company->name, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::label('inputFantasy', 'Nome Fantasia') !!}
                        {!! Form::text('fantasy', $company->fantasy, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('inputCnpj', 'CNPJ') !!}
                        {!! Form::text('cnpj', $company->cnpj, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('inputIe', 'Inscrição Estadual') !!}
                        {!! Form::text('ie', $company->ie, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('inputAddress', 'Endereço') !!}
                        {!! Form::text('address', $company->address, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('inputZipCode', 'CEP') !!}
                        {!! Form::text('zip_code', $company->zip_code, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('inputCity', 'Cidade') !!}
                        {!! Form::text('city', $company->city, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('inputState', 'Estado') !!}
                        {!! Form::select('state',
                        [
                            'AC' => 'Acre',
                            'AL' => 'Alagoas',
                            'AP' => 'Amapá',
                            'AM' => 'Amazonas',
                            'BA' => 'Bahia',
                            'CE' => 'Ceará',
                            'DF' => 'Distrito Federal',
                            'ES' => 'Espirito Santo',
                            'GO' => 'Goiás',
                            'MA' => 'Maranhão',
                            'MS' => 'Mato Grosso do Sul',
                            'MT' => 'Mato Grosso',
                            'MG' => 'Minas Gerais',
                            'PA' => 'Pará',
                            'PB' => 'Paraíba',
                            'PR' => 'Paraná',
                            'PE' => 'Pernambuco',
                            'PI' => 'Piauí',
                            'RJ' => 'Rio de Janeiro',
                            'RN' => 'Rio Grande do Norte',
                            'RS' => 'Rio Grande do Sul',
                            'RO' => 'Rondônia',
                            'RR' => 'Roraima',
                            'SC' => 'Santa Catarina',
                            'SP' => 'São Paulo',
                            'SE' => 'Sergipe',
                            'TO' => 'Tocantins',
                         ]
                        , $company->state, ['class' => 'form-control', 'disabled']); !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('inputCountry', 'Pais') !!}
                        {!! Form::text('country', $company->country, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {!! Form::label('inputPhone', 'Telefone') !!}
                        {!! Form::text('phone', $company->phone, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('inputEmail', 'E-Mail') !!}
                        {!! Form::text('email', $company->email, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('inputResponsible', 'Responsável') !!}
                        {!! Form::text('responsible', $company->responsible, ['class' => 'form-control', 'disabled']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
