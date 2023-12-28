@extends('layouts.settings')

@section('settings-action')
    <div class="set-list">
        <div class="set-item-bar">
            <h1>Settings main page</h1>
            <p class="set-item-text">Here you put navigation links to change some settings</p>
        </div>
        <div class="set-item">
            <a href="/settings/url" class="url-link">
                <span>Your URL's</span>
            </a>
        </div>
        <div class="set-item">
            <a href="/settings/personal" class="pers-link">
                <span>Personal Settings</span>
            </a>
        </div>
    </div>

@endsection
