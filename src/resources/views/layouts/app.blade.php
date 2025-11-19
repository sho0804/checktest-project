<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round:ital,wght@0,400;1,400&display=swap" rel="stylesheet">

    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">
                FashionablyLate
            </h1>
        </div>
    </header>
    <main>
        <div class="contact__content">
            <div class="section__title">
                <h2>@yield('page-title')</h2>
            </div>
        @yield('content')
        </div>
    </main>
</body>
</html>
