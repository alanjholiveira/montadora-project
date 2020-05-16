<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('inputName', 'Nome do Veiculo') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('inputYear', 'Ano') !!}
            {!! Form::text('year', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('inputModel', 'Modelo') !!}
            {!! Form::text('model', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="form-group">
            {!! Form::label('inputColor', 'Cor:') !!}
            {!! Form::text('color', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-7">
        <div class="form-group">
            {!! Form::label('inputChassisNumber', 'Numéro do Chassis') !!}
            {!! Form::text('chassis_number', null, ['class' => 'form-control', 'required']) !!}
        </div>
    </div>
    <div class="col-md-3">
        {!! Form::label('inputCatId', 'Categoria') !!}
        <div class="form-group">

            {!! Form::select('cat_id', $categories, null, ['id' => 'cat_id', 'class' => 'form-control', 'placeholder' => '::: Selecionar Categorias :::']) !!}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        {!! Form::label('inputCompanyId', 'Filial') !!}
        <div class="form-group">

            {!! Form::select('company_id', $companies, null, ['id' => 'company_id', 'class' => 'form-control', 'placeholder' => '::: Selecionar Empresa :::']) !!}
        </div>
    </div>
</div>
