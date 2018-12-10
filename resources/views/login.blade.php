
@extends('layout.baselogin')	
	<!-- Header area -->
@section('conteudo')


<section id="login" class="section green">
		
<div class="container">
    <div id="countdown" ></div>
  <div class="subcription-info text-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="form-group row">
                    <h4>Login</h4>
                </div>

                <div class="card-body">
                    <form method="POST" class="subscribe_form" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Digite seu email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Digite sua senha" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> <label class="form-check-label" for="remember">{{ __('Lembrar senha') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0" align="center">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-lg btn-success">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu sua senha?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection