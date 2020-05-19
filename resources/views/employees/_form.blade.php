<div class="row">
    <div class="col-md-3">
        {!! Form::label('situation', 'Situação Cadastral') !!}
        <div class="form-group">
            {!! Form::label('inputSituation', 'Ativo') !!}
            {{ Form::radio('situation', 'active', true) }}
            {!! Form::label('inputSituation', 'Inativo') !!}
            {{ Form::radio('situation','inactive', null) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-7">
        <div class="form-group">
            {!! Form::label('inputName', 'Nome Completo') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('inputDateBirth', 'Data de Nascimento') !!}
            {!! Form::text('date_birth', null, ['id' => 'datePick', 'class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('inputGender', 'Sexo') !!}
            {!! Form::select('gender', ['M' => 'Masculino', 'F' => 'Feminino'], null, ['placeholder' => 'Sexo..','class' => 'form-control', 'required']); !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('inputCpf', 'CPF') !!}
            {!! Form::text('cpf', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('inputOccupation', 'Função') !!}
            {!! Form::text('occupation', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('inputSalary', 'Salario') !!}
            {!! Form::text('salary', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('inputAddress', 'Endereço') !!}
            {!! Form::text('address', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('inputZipCode', 'CEP') !!}
            {!! Form::text('zip_code', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('inputCity', 'Cidade') !!}
            {!! Form::text('city', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('inputState', 'Estado') !!}
            {{--            {!! Form::text('state', null, ['class' => 'form-control', 'required']) !!}--}}
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
    <div class="col-md-2">
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
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('inputEmail', 'E-Mail') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            {!! Form::label('inputCompanyId', 'Filial') !!}
            {!! Form::select('company_id', $companies, null, ['id' => 'company_id', 'class' => 'form-control', 'placeholder' => '::: Selecionar Empresa :::']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <span class="icon text-white-500">
                {!! Form::label('inputPassword', 'Senha') !!}
                <a href="#" id="gerarSenha" class="text-dark-50 small">
                    <span style="color: orange;">
                         <i class="fas fa-key shadow"></i>
                    </span>
                    (Gerar Senha)
                </a>
            </span>
            {!! Form::password('password', ['id' => 'password', 'class' => 'form-control']) !!}
            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>
    </div>
</div>
