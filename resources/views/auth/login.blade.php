@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-9">
            @include('layouts._errors')
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Seja Bem Vindo</h1>
                                </div>
                                {!! Form::open(['route' => 'login', 'method' => 'POST', 'class' => 'user']) !!}
                                    <div class="form-group">
                                        {!! Form::text('cpf', null, ['id' => 'cpf', 'class' => 'form-control form-control-user', 'aria-describedby' => 'cpfHelp',
                                           'placeholder' => 'Digite seu CPF', 'required']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::password('password', ['id' => 'password', 'class' => 'form-control form-control-user', 'aria-describedby' => 'cpfHelp',
                                           'placeholder' => 'Senha de Acesso', 'required', 'autocomplete' => 'current-password']) !!}
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">Lembrar de
                                                min?</label>
                                        </div>
                                    </div>
                                    {!! Form::submit('ENTRAR', ['class' => 'btn btn-primary btn-user btn-block']) !!}
                                    <hr>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
