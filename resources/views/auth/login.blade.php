@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="auth-wrap">
            <h1>Login Form</h1>
            <form class="auth-form" method="POST" action="/login">
                <input
                    {{-- value="{{ old('last_name') }}"--}}
                        name='login'
                        placeholder='Login'
                        class=""
                />

                <input
                        name='password'
                        placeholder="Password"
                        class=""
                />

                <button type="submit" class="">
                    Login
                </button>

                <div class="">
                    <a href="/login">
                        Don't have a Login yet? Register
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection