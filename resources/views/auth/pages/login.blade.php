@extends('auth.layouts.app')
@section('content')
    <section class="section d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login.process') }}">
                                @csrf
                                <x-form.input name="email" label="Email" type="text" :required="true" />
                                <x-form.input name="password" label="Password" type="password" :required="true" />
                                <x-form.checkbox name="remember" label="Remember Me" id="remember" :checked="false"
                                    value="" />
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
