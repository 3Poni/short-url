@extends('layouts.app')

@section('content')
<div class="container">
    <div class="set-wrap">
        <h1>Settings page</h1>
        <div class="set-content">
            @yield('settings-action')
        </div>
    </div>
</div>
@endsection
