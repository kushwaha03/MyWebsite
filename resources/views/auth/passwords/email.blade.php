@extends('auth.layouts.auth')

@section('body_class','passwords_email')

@section('content')
    <div>    <center>  <div class="site-logo">
    <a href="#"><img src="http://myweb.joburg/wp-content/uploads/2015/12/My-Website.gif" alt="logo" height="50" width="320" style="margin-top: 10px;"></a>
    </div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    {{ Form::open(['route' => 'password.email']) }}
                        <h1>{{ __('views.auth.passwords.email.header') }}</h1>

                        <div>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   placeholder="{{ __('views.auth.passwords.email.input') }}" required autofocus>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (!$errors->isEmpty())
                            <div class="alert alert-danger" role="alert">
                                {!! $errors->first() !!}
                            </div>
                        @endif

                        <div>
                            <button class="btn btn-default submit" type="submit">{{ __('views.auth.passwords.email.action') }}</button>
                            <a class="reset_pass" href="{{ route('login') }}">
                                {{ __('views.auth.passwords.email.message') }}
                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <div>
                                <div class="h1">{{ config('app.name') }}</div>
                                <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('views.auth.passwords.email.copyright') }}</p>
                            </div>
                        </div>
                    {{ Form::close() }}
                </section>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    @parent

    {{ Html::style(mix('assets/auth/css/passwords.css')) }}
@endsection
