<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trivia API Documentation - Connor Smyth</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <link href="/css/hamburgers.css" rel="stylesheet">
    <link href="{{ url('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono:400,400i|IBM+Plex+Sans+Condensed:400,400i|IBM+Plex+Sans:100,100i,400,400i,700,700i|IBM+Plex+Serif:400,400i|Montserrat&display=swap" rel="stylesheet" type="text/css">
</head>
<body>
    <header class="limit-width">
        <a href="https://connorsmyth.com"><h1>Connor Smyth</h1></a>
        @include('menu')
    </header>
    <div class="sample">
        <a href="/" class="back">Back</a>
        <div class="sample-inner">
                <pre>
{
    "id": 29299,
    "answer": "<i>Raiders of the Lost Ark</i>",
    "question": "This 1981 blockbuster introduced the hero Indiana Jones",
    "value": 100,
    "airdate": "2000-10-02T12:00:00.000Z",
    "air_date": "2000-10-02",
    "category_id": 309,
    "category": {
        "id": 309,
        "name": "the movies"
    }
}
                </pre>
        </div>
    </div>
    <div class="main-container">
        <h2>API Usage</h2>

        <div class="route-grouping">
            <h3>/question</h3>
            <ul>
                <li>URL: <span>/api/question</span></li>
                <li>Default: the default return is a random question</li>
                <li>Options:
                    <ul>
                        <li><span>id</span>(int): the question with the specified id</li>
                        <li><span>value</span>(int): a random question of the specified value</li>
                        <li><span>category</span>(string): a random question from the specified category</li>
                        <li><span>airdate</span>(string): a random question from the specified air date</li>
                        <li><span>year</span></span>(int): a random question from the specified year</li>
                        <li><span>month</span></span>(int): a random question from the specified month</li>
                        <li><span>day</span></span>(int): a random question from the specified day</li>
                    </ul>
                </li>
            </ul>
            <p>Example: <a href="https://trivia.connorsmyth.com/api/question/?id=6" class="example">https://trivia.connorsmyth.com/api/question/?id=6</a></p>
            <p>Example: <a href="https://trivia.connorsmyth.com/api/question/?value=200&category=music" class="example">https://trivia.connorsmyth.com/api/question/?value=200&category=music</a></p>
        </div>

        <div class="route-grouping">
            <h3>/questions</h3>
            <ul>
                <li>URL: <span>/api/questions</span></li>
                <li>Default: the default return is a group of 100 questions starting with an id of 1 and ending with an id of 100</li>
                <li>Options:
                    <ul>
                        <li><span>value</span>(int): all questions of the specified value</li>
                        <li><span>category</span>(string): all questions from the specified category</li>
                        <li><span>airdate</span>(string): all questions from the specified air date</li>
                        <li><span>year<</span>(int): all questions from the specified year</li>
                        <li><span>month</span>(int): all questions from the specified month</li>
                        <li><span>day</span>(int): all questions from the specified day</li>
                        <li><span>offset</span>(int): all questions starting from a specified offset number</li>
                        <li><span>quantity</span>(int): limit the number of questions that can be returned</li>
                    </ul>
                </li>
            </ul>
            <p>Example: <a href="https://trivia.connorsmyth.com/api/questions/?value=200&category=music" class="example">https://trivia.connorsmyth.com/api/questions/?value=200&category=sports</a></p>
        </div>
        <div class="route-grouping">
            <h3>/question/today</h3>
            <ul>
                <li>URL: <span>/api/question/today</span></li>
                <li>Default: the default return is a random question that aired on today's date from any year</li>
                <li>Options:
                    <ul>
                        <li><span>value</span>(int): a random question from today's date of the specified value</li>
                        <li><span>category</span>(string): a random question from today's date from the specified category</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="route-grouping">
            <h3>/questions/today</h3>
            <ul>
                <li>URL: <span>/api/questions/today</span></li>
                <li>Default: the default all questions that aired on today's date from any year</li>
                <li>Options:
                    <ul>
                        <li><span>value</span>(int): all questions from today's date of the specified value</li>
                        <li><span>category</span>(string): all questions from today's date from the specified category</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <footer>
        @include('footer')
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/app.js"></script></body>
</html>
