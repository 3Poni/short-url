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

                <? if(isset($_SESSION['link'])): ?>
                <div class="link">
                    <h1><b>Your link is:<b/></h1>
                    <span><?= $_SERVER['HTTP_HOST'] .'/sh/'. $_SESSION['link']; ?></span>
                </div>
                <? unset($_SESSION['link']); ?>
                <? endif; ?>
            </div>
        </div>
    </div>
@endsection