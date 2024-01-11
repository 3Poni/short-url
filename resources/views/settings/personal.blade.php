@extends('layouts.settings')

@section('settings-action')
    <div class="set-list">
        <div class="set-item-bar">
            <h1>Personal Settings page</h1>
            <small>Here you must put some personal data and links to change it</small>
        </div>
        <div class="set-item-pers">
            @isset($data)
            <div class="set-item-url">
                <input type="text" name="login" value="<?= $data['login']; ?>" disabled>
                <a><span>Edit</span></a>
            </div>
            <div class="set-item-url">
                <input type="email" name="email" value="<?= $data['email']; ?>" disabled>
                <a><span>Edit</span></a>
            </div>
            <div class="set-item-url">
                <input type="password" name="password" value="Your password" disabled>
                <a><span>Edit</span></a>
            </div>
            @endisset
        </div>
    </div>
@endsection
