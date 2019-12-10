<body>
<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ \URL::asset('images/login/bg-01.jpg') }}');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					{{--<span class="login100-form-logo">
                        <img src="{{ \URL::asset('images/login/icons/lietadlo.svg')}}";>
						<i class="zmdi zmdi-landscape"></i>
					</span>--}}
                {{ csrf_field() }}
                @if ($errors->has('email'))
                    <span class="help-block">
                      <strong style="color: red;">{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                @if ($errors->has('password'))
                    <span class="help-block">
                      <strong style="color: red;">{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <span class="login100-form-title p-b-40 p-t-20">
						Prihlásenie
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="email" placeholder="Prihlasovací e-mail" autofocus required>
                    <span class="focus-input100" data-placeholder="📧"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Heslo" required>
                    <span class="focus-input100" data-placeholder="🔒"></span>
                </div>

                <div class="container-login100-form-btn p-t-30">
                    <button type="submit" class="login100-form-btn">
                        Prihlásiť sa do systému
                    </button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="{{route("register")}}">
                        Alebo sa zaregistrujte TU.
                    </a>
                </div>
                <div class="text-center p-t-20">
                    <a class="txt1" href="{{route('index')}}">
                        Späť na hlavnú stránku.
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>