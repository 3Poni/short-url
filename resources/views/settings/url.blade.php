@extends('layouts.settings')

@section('settings-action')
    <div class="set-list">
        <div class="set-item-bar">
            <h1>URL's Settings</h1>
            <small>Here you put list of person settings and buttons to change them and add new one's</small>
        </div>

        <div class="set-item-pers">
            @isset($data)
            <? foreach($data as $dat): ?>
                <?= '<div class="set-item-url">
                <input type="url" name="redirect" value="'. $dat['redirect'] .'" disabled>
                <input type="url" name="short" value="'. $_SERVER['HTTP_HOST'] .'/sh/' . $dat['short_url'] .' " disabled>
                <a><span>Edit</span></a>
                <a><span>X</span></a>
            </div>'; ?>
            <? endforeach; ?>
            @endisset
            <div class="set-item-url">
                <input type="url" name="long" value="Long URL" disabled>
                <input type="url" name="short" value="Short URL" disabled>
                <a><span>Edit</span></a>
                <a><span>X</span></a>
            </div>
            <div class="set-item-url">
                <input type="url" name="long" value="Long URL" disabled>
                <input type="url" name="short" value="Short URL" disabled>
                <a><span>Edit</span></a>
                <a><span>X</span></a>
            </div>
        </div>
    </div>
@endsection
