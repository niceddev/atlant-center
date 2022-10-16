<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">

    <title>Atlant</title>
</head>
<body>

    <div class="wrapper">
        {{ $slot }}
    </div>

    <script src="{{ mix('js/functions.js') }}"></script>
    <script src="{{ mix('js/popup.js') }}"></script>

</body>
</html>
