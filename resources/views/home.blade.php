<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trivia - Connor Smyth</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
</head>
<body>

    <header class="limit-width">
        <h1>Connor Smyth</h1>
        @include('menu')
    </header>

    <footer>
        @include('footer')
    </footer>

</body>
</html>
