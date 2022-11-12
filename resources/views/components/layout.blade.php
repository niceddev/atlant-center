<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">

    <title>Atlant</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C9S8HZE7ZD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-C9S8HZE7ZD');
    </script>
</head>
<body>

    <div class="wrapper">
        {{ $slot }}
    </div>

    <script type="module" src="{{ mix('js/functions.js') }}"></script>
    <script type="module" src="{{ mix('js/popup.js') }}"></script>

</body>
</html>
