<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .container {
            max-width: 960px;
        }

        .pricing-header {
            max-width: 700px;
        }
    </style>

</head>

<body>
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
    <p class="h5 my-0 me-md-auto fw-normal">Бухгалтерські послуги</p>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-dark" href="/">Головна</a>
        <a class="p-2 text-dark" href="/about">Про нас</a>
        <a class="p-2 text-dark" href="/write">Зворотний зв'язок</a>

    </nav>
    <a class="btn btn-outline-primary" href="/write">Відзиви</a>
</header>
<main class="container">


@yield('main_content')

</main>

</body>
</html>
