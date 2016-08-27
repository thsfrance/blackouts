@extends('layouts.blackouts')

@section('content')
<div class="container">
    <div class="row">
                <div class="callout large">
                    <h3>Registro de Usuários</h3>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}" novalidate>
                        {{ csrf_field() }}

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus placeholder="Nome">

                                @if ($errors->has('name'))
                                    <span class="form-error is-visible">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                        
                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail">

                                @if ($errors->has('email'))
                                    <span class="form-error is-visible">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
             

                  
                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Senha">

                                @if ($errors->has('password'))
                                    <span class="form-error is-visible">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                        

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmação de senha">

                                @if ($errors->has('password_confirmation'))
                                    <span class="form-error is-visible">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="button secondary" disalbed>
                                    <i class="fi-save"></i> Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</div>
@endsection
