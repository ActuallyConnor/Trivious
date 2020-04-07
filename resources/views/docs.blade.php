
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon"/>
    <link href="{{ url('docs/css/style.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ url('docs/js/all.css') }}"></script>



    <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
    </script>
</head>

<body class="">
<a href="#" id="nav-button">
      <span>
        NAV
        <img src="images/navbar.png" />
      </span>
</a>
<div class="tocify-wrapper">
{{--    <img src="images/logo.png" />--}}
    <div class="lang-selector">
        <a href="#" data-language-name="bash">bash</a>
        <a href="#" data-language-name="javascript">javascript</a>
    </div>
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>
    <div id="toc">
    </div>
    <ul class="toc-footer">
        <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
    </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <!-- START_INFO -->
        <h1>Info</h1>
        <p>Welcome to the generated API reference.
            <a href="http://localhost/docs/collection.json">Get Postman Collection</a></p>
        <!-- END_INFO -->
        <h1>general</h1>
        <!-- START_413b313dc28b4272fc404877f46d51ac -->
        <h2>api/question</h2>
        <blockquote>
            <p>Example request:</p>
        </blockquote>
        <pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/question" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
        <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/question"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
        <blockquote>
            <p>Example response (200):</p>
        </blockquote>
        <pre><code class="language-json">{
    "id": 37183,
    "answer": "Death Valley",
    "question": "Greenland Ranch Station was the odd name of the spot in this U.S. area where a thermometer hit 134 on July 10, 1913",
    "value": 1000,
    "airdate": "2004-04-01T12:00:00.000Z",
    "air_date": "2004-04-01",
    "category_id": 7731,
    "category": {
        "id": 7731,
        "name": "hot spots"
    }
}</code></pre>
        <h3>HTTP Request</h3>
        <p><code>GET api/question</code></p>
        <!-- END_413b313dc28b4272fc404877f46d51ac -->
        <!-- START_6f02f6c714dfe292a9f5589b02747ff4 -->
        <h2>api/question/today</h2>
        <blockquote>
            <p>Example request:</p>
        </blockquote>
        <pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/question/today" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
        <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/question/today"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
        <blockquote>
            <p>Example response (200):</p>
        </blockquote>
        <pre><code class="language-json">{
    "id": 11355,
    "answer": "Morocco",
    "question": "Tangier was returned to this north African nation in 1956, after 33 years of international control",
    "value": 400,
    "airdate": "1997-03-14T12:00:00.000Z",
    "air_date": "1997-03-14",
    "category_id": 114,
    "category": {
        "id": 114,
        "name": "history"
    }
}</code></pre>
        <h3>HTTP Request</h3>
        <p><code>GET api/question/today</code></p>
        <!-- END_6f02f6c714dfe292a9f5589b02747ff4 -->
        <!-- START_f95035d2595bf4d1e537e39de71dfb44 -->
        <h2>api/questions/today</h2>
        <blockquote>
            <p>Example request:</p>
        </blockquote>
        <pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/questions/today" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
        <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/questions/today"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
        <blockquote>
            <p>Example response (200):</p>
        </blockquote>
        <pre><code class="language-json">[
    {
        "id": 3780,
        "answer": "Shear them",
        "question": "In a 1982 marathon in New Zealand, 4 men did this to 2,519 sheep in 24 hours",
        "value": 100,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 847,
        "category": {
            "id": 847,
            "name": "guinness records"
        }
    },
    {
        "id": 3781,
        "answer": "McDonald's",
        "question": "Through a licensing agreement with this company, Sears has opened stores called McKids",
        "value": 100,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 176,
        "category": {
            "id": 176,
            "name": "business &amp; industry"
        }
    },
    {
        "id": 3782,
        "answer": "Desi Arnaz",
        "question": "His book, simply titled \"A Book\", is dedicated to \"Lucie And Desi IV\"",
        "value": 100,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 646,
        "category": {
            "id": 646,
            "name": "celebrity authors"
        }
    },
    ...
]</code></pre>
        <h3>HTTP Request</h3>
        <p><code>GET api/questions/today</code></p>
        <!-- END_f95035d2595bf4d1e537e39de71dfb44 -->
        <!-- START_de9212b4bd813e07f73b53cc3bd13088 -->
        <h2>api/questions</h2>
        <blockquote>
            <p>Example request:</p>
        </blockquote>
        <pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/questions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
        <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/questions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
        <blockquote>
            <p>Example response (200):</p>
        </blockquote>
        <pre><code class="language-json">[
    {
        "id": 1,
        "answer": "the Western division",
        "question": "The Atlanta Braves are in this division of the National League",
        "value": 100,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 2,
        "category": {
            "id": 2,
            "name": "baseball"
        }
    },
    {
        "id": 2,
        "answer": "sold flowers (flower girl accepted)",
        "question": "Eliza Doolittle did it for a living",
        "value": 100,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 3,
        "category": {
            "id": 3,
            "name": "odd jobs"
        }
    },
    {
        "id": 3,
        "answer": "(1 of) kangaroo and emu",
        "question": "1 of 2 animals on its coat of arms",
        "value": 100,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 5,
        "category": {
            "id": 5,
            "name": "australia"
        }
    },
    ...
]</code></pre>
        <h3>HTTP Request</h3>
        <p><code>GET api/questions</code></p>
        <!-- END_de9212b4bd813e07f73b53cc3bd13088 -->
    </div>
    <div class="dark-box">
        <div class="lang-selector">
            <a href="#" data-language-name="bash">bash</a>
            <a href="#" data-language-name="javascript">javascript</a>
        </div>
    </div>
</div>
</body>
</html>
