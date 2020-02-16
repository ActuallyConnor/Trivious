<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trivia - Connor Smyth</title>


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
        <div class="sample-inner">
                <pre style="white-space: pre-wrap">
{
    "id": 77871,
    "answer": "(Stephen) King",
    "question": "He worked in a laundry to help pay the bills, at least until \"Carrie\" took off in 1974",
    "value": 600,
    "airdate": "2013-12-26T12:00:00.000Z",
    "air_date": "2013-12-26",
    "category_id": 17462,
    "category": {
        "id": 17462,
        "name": "the pauper"
    }
}
                </pre>
        </div>
    </div>

    <div class="main-container homepage">
        <h1>Trivia API</h1>
        <a href="https://github.com/ActuallyConnor/Trivious" target="_blank">GitHub repository</a>
        <a href="{{ url('/api') }}" target="_self">Documentation</a>
        <p>I started creating this trivia API when I decided to create a trivia slack app. At first I was leveraging a different API that contained only user submitted questions. The issue I found with it was it had only the option for true or false questions or multiple choice. I wanted something that was more of along the lines of single question and single answer. I didn't want the question not to work without the other multiple choice options.</p>
        <p>I began looking around for a different trivia api and came across <a href="http://jservice.io" target="_blank">jService.io</a>, a ruby based trivia API with 156,800 questions built by scraping jArchive. After poking around a little I discovered that it was being hosted on a simple heroku server with many outdated Ruby dependencies. I attempted to replicate the Ruby environment on my local machine and a simple Linode server with no success, even with rvm. I noticed the developer hasn't had much of an online presence in the last 5 years so after attempting to reach out with and receiving no response I decided to create my own trivia API.</p>
        <p>Upon noticing that jService kept track of questions marked as invalid and also had many questions with empty questions or answers fields. I built a quick PHP script and began scraping away. I then created another PHP script after evaluating the state of the database and cleaned up the invalid questions and sent it to a developer/mentor friend who was curious, <a href="http://jordanaharrison.com" target="_blank">Jordana Harrison</a>. They helped me do some further cleaning and created a new table that handled the relationships between the category names and the category IDs.</p>
        <p>Then I started to create the API with Laravel. I am a big fan of the open source movement so I didn't want to bog people down with having to use API keys, similar to the way jService works. The API is free and open to the public.</p>
    </div>

    <footer>
        @include('footer')
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/app.js"></script></body>
</body>
</html>
