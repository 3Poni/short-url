<!doctype html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--<script src="https://cdn.tailwindcss.com"></script>-->
<head>
    <link rel="stylesheet" href="/css/main.css">
    <title>
        URL's shortener
    </title>
</head>
<body>
<header class="header">
    <div class="header-container">
        <div class="header-bar">
            <div class="header-item">
                <a href="/"><button>Main</button></a>
            </div>
            <div class="header-item">
                <a href="/settings"><button>Settings</button></a>
            </div>
            <div class="header-item">
                <a href="/login"><button>Login</button></a>
            </div>
            <div class="header-item">
                <a href="/register"><button>Register</button></a>
            </div>
        </div>
    </div>
</header>
<main>
    @yield('content')
</main>
</body>
</html>
