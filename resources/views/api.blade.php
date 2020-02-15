<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trivia API Documentation - Connor Smyth</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
    <header>

    </header>
    <div class="main-container">
        <h2>API Usage</h2>

        <div class="route-grouping">
            <h3>/question</h3>
            <ul>
                <li>URL: <span>/api/quesiton</span></li>
                <li>Default: the default return is a random question</li>
                <li>Options:
                    <ul>
                        <li><span>id</span>(int): the specific id of the question</li>
                        <li><span>value</span>(int): a random question of the specified value</li>
                        <li><span>category</span>(string): a random question from the specified category</li>
                        <li><span>airdate</span>(string): a random question from the specified air date</li>
                        <li><span>year</span></span>(int): a random question from the specified year</li>
                        <li><span>month</span></span>(int): a random question from the specified month</li>
                        <li><span>day</span></span>(int): a random question from the specified day</li>
                    </ul>
                </li>
            </ul>
            <a href="https://trivia.connorsmyth.com/api/question/?id=6" class="example">https://trivia.connorsmyth.com/api/question/?id=6</a>
            <a href="https://trivia.connorsmyth.com/api/question/?value=200&category=music" class="example">https://trivia.connorsmyth.com/api/question/?value=200&category=music</a>
        </div>

        <div class="route-grouping">
            <h3>/questions</h3>
            <ul>
                <li>URL: <span>/api/quesitons</span></li>
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
            <a href="https://trivia.connorsmyth.com/api/questions/?value=200&category=music" class="example">https://trivia.connorsmyth.com/api/questions/?value=200&category=sports</a>
        </div>
        <div class="route-grouping">
            <h3>/question/today</h3>
            <ul>
                <li>URL: <span>/api/quesiton/today</span></li>
                <li>Default: the default return is a random question that aired on today's date from any year</li>
                <li>Options:
                    <ul>
                        <li><span>value</span>(int): a random question from today's date of the specified value</li>
                        <li><span>category</span>(string): a random question from today's date from the specified category</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>
