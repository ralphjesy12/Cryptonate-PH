@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="ui middle aligned grid fullheight">
            <div class="column">
                <div class="ui card mx-auto rounded-0 p-5" style="width: 450px;">
                    <form class="ui form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2 class="ui header">LOGIN</h2>

                        <h1 class="ui header">
                            Welcome back
                            <div class="sub header">
                                sign in to continue
                            </div>
                        </h1>

                        @include('layouts.messages')

                        <div class="field">
                            <label>Username</label>
                            <input type="email" name="email">
                        </div>

                        <div class="field">
                            <label>Password</label>
                            <input type="password" name="password">
                        </div>
                        <div class="ui divider hidden"> </div>
                        <button class="ui button" type="submit">Sign in</button>
                        <p>
                            Don&apos;t have an account? <a href="#">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="display:none;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
    html,body{
        background: #604d8c;
    }
</style>
@endpush
