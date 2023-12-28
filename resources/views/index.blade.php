@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-form">
            <div class="main-content">

                <h1>Hello World Of Blade Templates!</h1>

                <div class="form">
                    <form method="post" action="/">
                        <input name="url" placeholder="https://example.com">

                        <button class="submit"><span>Submit</span></button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection