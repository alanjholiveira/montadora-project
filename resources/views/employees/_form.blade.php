<div class="row">
    <div class="col-md-3">
        {!! Form::label('inputSituation', 'Situação Cadastral') !!}
        <div class="form-group">
            {!! Form::label('inputMatrix', 'Ativo') !!}
            {{ Form::radio('situation', 'active', true) }}
            {!! Form::label('inputFilial', 'Inativo') !!}
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
            {!! Form::label('inputYear', 'Data de Nascimento') !!}
            {!! Form::text('date_birth', null, ['id' => 'datePick', 'class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('inputModel', 'Sexo') !!}
            {!! Form::text('gender', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('inputCpf', 'CPF') !!}
            {!! Form::text('cpf', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            {!! Form::label('inputOccupation', 'Função') !!}
            {!! Form::text('occupation', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-5">
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
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('inputState', 'Estado') !!}
            {!! Form::text('state', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('inputCountry', 'Pais') !!}
            {!! Form::text('country', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-4">
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
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('inputCompanyId', 'Filial') !!}
            {!! Form::select('company_id', $companies, null, ['id' => 'company_id', 'class' => 'form-control', 'placeholder' => '::: Selecionar Empresa :::']) !!}
        </div>
    </div>
</div>
