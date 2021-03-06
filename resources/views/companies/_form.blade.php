<div class="row">
    <div class="col-md-3 align-self-center">
        <div class="">
            {!! Form::label('inputMatrix', 'MATRIZ') !!}
            {{ Form::radio('matrix', 1, null) }}
            {!! Form::label('inputFilial', 'FILIAL') !!}
            {{ Form::radio('matrix',0, true) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            {!! Form::label('inputName', 'Razão Social') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('inputFantasy', 'Nome Fantasia') !!}
            {!! Form::text('fantasy', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('inputCnpj', 'CNPJ') !!}
            {!! Form::text('cnpj', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('inputIe', 'Inscrição Estadual') !!}
            {!! Form::text('ie', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('inputAddress', 'Endereço') !!}
            {!! Form::text('address', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('inputZipCode', 'CEP') !!}
            {!! Form::text('zip_code', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('inputCity', 'Cidade') !!}
            {!! Form::text('city', null, ['class' => 'form-control', 'required']) !!}
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
                        , null, ['class' => 'form-control', 'placeholder' => 'Estado..', 'required']); !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('inputCountry', 'Pais') !!}
            {!! Form::text('country', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('inputPhone', 'Telefone') !!}
            {!! Form::text('phone', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('inputEmail', 'E-Mail') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('inputResponsible', 'Responsável') !!}
            {!! Form::text('responsible', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>
