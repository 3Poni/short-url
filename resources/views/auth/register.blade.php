@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="auth-wrap">
            <h1>Register Form</h1>
            <form class="auth-form" method="POST" action="/register">
                <input
                    {{-- value="{{ old('last_name') }}"--}}
                        name='login'
                        placeholder='Login'
                        class=""
                />

                <input
                        {{--  value="{{ old('email') }}"--}}
                        name="email"
                        placeholder="Email Address"
                        class=""
                />
                <input
                        name='password'
                        placeholder="Password"
                        class=""
                />
                <input
                        name='confirm_password'
                        placeholder="Confirm Password"
                        class=""
                />

                <button type="submit" class="">
                    Register
                </button>

                <div class="">
                    <a href="/login">
                        Already Registered? Login
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection