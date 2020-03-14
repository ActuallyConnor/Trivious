
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

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
    {
        "id": 3783,
        "answer": "Dorothy Hamill",
        "question": "The bobbed hair style of this skater known for her camel was the rage in 1976",
        "value": 100,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 848,
        "category": {
            "id": 848,
            "name": "fads &amp; fashions"
        }
    },
    {
        "id": 3784,
        "answer": "Week",
        "question": "Half a fortnight",
        "value": 100,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 849,
        "category": {
            "id": 849,
            "name": "rhymes with eek"
        }
    },
    {
        "id": 3785,
        "answer": "Groucho",
        "question": "The Marx brother who wrote \"Groucho &amp; Me\"",
        "value": 200,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 646,
        "category": {
            "id": 646,
            "name": "celebrity authors"
        }
    },
    {
        "id": 3786,
        "answer": "Arkansas",
        "question": "State where you can visit Hot Springs National Park &amp; Crater of Diamonds State Park",
        "value": 200,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 582,
        "category": {
            "id": 582,
            "name": "u.s. geography"
        }
    },
    {
        "id": 3787,
        "answer": "Seek",
        "question": "To look for",
        "value": 200,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 849,
        "category": {
            "id": 849,
            "name": "rhymes with eek"
        }
    },
    {
        "id": 3788,
        "answer": "Cards",
        "question": "John Sain, a 15-year-old, built a 68-story house of these without creasing them or using any adhesive",
        "value": 300,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 847,
        "category": {
            "id": 847,
            "name": "guinness records"
        }
    },
    {
        "id": 3789,
        "answer": "Kodak",
        "question": "The Weekend 35 is a disposable underwater camera sold by this maker of the disposable Fling",
        "value": 300,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 176,
        "category": {
            "id": 176,
            "name": "business &amp; industry"
        }
    },
    {
        "id": 3790,
        "answer": "Joseph Cotten",
        "question": "Of Vanity, Prince or Joseph Cotten, the one who wrote \"Vanity Will Get You Somewhere\"",
        "value": 300,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 646,
        "category": {
            "id": 646,
            "name": "celebrity authors"
        }
    },
    {
        "id": 3791,
        "answer": "Leek",
        "question": "Eating this member of the lily family could make your breath reek",
        "value": 300,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 849,
        "category": {
            "id": 849,
            "name": "rhymes with eek"
        }
    },
    {
        "id": 3792,
        "answer": "Thomas Jefferson",
        "question": "Highest price paid for any bottle of wine was $157,500 for a 1787 Chateau Lafite bearing his initials, T.J.",
        "value": 400,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 847,
        "category": {
            "id": 847,
            "name": "guinness records"
        }
    },
    {
        "id": 3793,
        "answer": "Chrysler",
        "question": "U.S. automaker that owns 15% of Maserati &amp; 100% of Lamborghini",
        "value": 400,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 176,
        "category": {
            "id": 176,
            "name": "business &amp; industry"
        }
    },
    {
        "id": 3794,
        "answer": "Goldfish",
        "question": "When Lothrop Withington Jr. swallowed one of these on a bet at Harvard, March 3, 1939, he began a fad",
        "value": 400,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 848,
        "category": {
            "id": 848,
            "name": "fads &amp; fashions"
        }
    },
    {
        "id": 3795,
        "answer": "Ignace Jan Paderewski",
        "question": "This 1st P.M. of the republic of Poland was the highest-paid classical concert pianist",
        "value": 500,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 847,
        "category": {
            "id": 847,
            "name": "guinness records"
        }
    },
    {
        "id": 3796,
        "answer": "Boeing",
        "question": "The Pacific Aero Products Company, founded in Seattle in 1916, is now called this",
        "value": 500,
        "airdate": "1990-03-14T12:00:00.000Z",
        "air_date": "1990-03-14",
        "category_id": 176,
        "category": {
            "id": 176,
            "name": "business &amp; industry"
        }
    },
    {
        "id": 11335,
        "answer": "Margaret Mitchell",
        "question": "Her recently-discovered work \"Lost Laysen\" was published in 1996, the 60th anniv. of \"Gone With The Wind\"",
        "value": 100,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1081,
        "category": {
            "id": 1081,
            "name": "authors"
        }
    },
    {
        "id": 11336,
        "answer": "Sheep",
        "question": "The Simbra Oilor in Oas, Romania celebrates the return of these animals to the pasture -- \"shear\" luck",
        "value": 100,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1114,
        "category": {
            "id": 1114,
            "name": "annual events"
        }
    },
    {
        "id": 11337,
        "answer": "Fidel Castro",
        "question": "In 1950 this world leader received a law degree from the University of Havana",
        "value": 100,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 278,
        "category": {
            "id": 278,
            "name": "famous names"
        }
    },
    {
        "id": 11338,
        "answer": "Christopher Columbus",
        "question": "In 1493 he reached Montserrat in the West Indies &amp; named it for a Spanish mountain",
        "value": 100,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 114,
        "category": {
            "id": 114,
            "name": "history"
        }
    },
    {
        "id": 11339,
        "answer": "Uncle Sam",
        "question": "This symbol of America has a type of beard named for him",
        "value": 100,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1840,
        "category": {
            "id": 1840,
            "name": "facial hair"
        }
    },
    {
        "id": 11340,
        "answer": "&lt;i&gt;Dirty Harry&lt;\/i&gt;",
        "question": "\"Magnum Force\" was its first sequel",
        "value": 100,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1841,
        "category": {
            "id": 1841,
            "name": "\"harry\" movies"
        }
    },
    {
        "id": 11341,
        "answer": "Vladimir Nabokov",
        "question": "This \"Lolita\" author began writing in English while living in France",
        "value": 200,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1081,
        "category": {
            "id": 1081,
            "name": "authors"
        }
    },
    {
        "id": 11342,
        "answer": "Bahamas",
        "question": "Junkanoo, a noisy celebration, welcomes the New Year in Nassau &amp; Freeport in this island group",
        "value": 200,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1114,
        "category": {
            "id": 1114,
            "name": "annual events"
        }
    },
    {
        "id": 11343,
        "answer": "Billy Graham",
        "question": "In May 1996 this evangelist &amp; his wife Ruth were honored with a Congressional gold medal",
        "value": 200,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 278,
        "category": {
            "id": 278,
            "name": "famous names"
        }
    },
    {
        "id": 11344,
        "answer": "Monaco",
        "question": "From 1815 to 1861 this principality on the Riviera was under the protection of Sardinia",
        "value": 200,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 114,
        "category": {
            "id": 114,
            "name": "history"
        }
    },
    {
        "id": 11345,
        "answer": "Eyebrows",
        "question": "Women have a special pencil for them",
        "value": 200,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1840,
        "category": {
            "id": 1840,
            "name": "facial hair"
        }
    },
    {
        "id": 11346,
        "answer": "&lt;i&gt;Harry And The Hendersons&lt;\/i&gt;",
        "question": "This Bigfoot comedy made big bucks in 1987",
        "value": 200,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1841,
        "category": {
            "id": 1841,
            "name": "\"harry\" movies"
        }
    },
    {
        "id": 11347,
        "answer": "Belgium",
        "question": "Ostend in this Low Country is home to Le Bal Rat Mort -- The Masked Ball of the Dead Rat",
        "value": 300,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1114,
        "category": {
            "id": 1114,
            "name": "annual events"
        }
    },
    {
        "id": 11348,
        "answer": "Spiro Agnew",
        "question": "In 1969 he was succeeded as Maryland governor by Democrat Marvin Mandel",
        "value": 300,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 278,
        "category": {
            "id": 278,
            "name": "famous names"
        }
    },
    {
        "id": 11349,
        "answer": "Santa Anna",
        "question": "In 1855 this victor at the Alamo was deposed as Mexican dictator &amp; fled to the Caribbean",
        "value": 300,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 114,
        "category": {
            "id": 114,
            "name": "history"
        }
    },
    {
        "id": 11350,
        "answer": "Goatee",
        "question": "Wearing this kind of beard would turn a nanny into a billy",
        "value": 300,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1840,
        "category": {
            "id": 1840,
            "name": "facial hair"
        }
    },
    {
        "id": 11351,
        "answer": "&lt;i&gt;Harry And Tonto&lt;\/i&gt;",
        "question": "In 1984 Paul Newman starred in \"Harry And Son\"; 10 years earlier, Art Carney won an Oscar for this film",
        "value": 300,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1841,
        "category": {
            "id": 1841,
            "name": "\"harry\" movies"
        }
    },
    {
        "id": 11352,
        "answer": "Job",
        "question": "Archibald MacLeish based his verse play \"J.B.\" on this book of the Bible",
        "value": 400,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1081,
        "category": {
            "id": 1081,
            "name": "authors"
        }
    },
    {
        "id": 11353,
        "answer": "Minnesota",
        "question": "An 1876 bank robbery attempt is reenacted during Defeat of Jesse James Days in Northfield in this state",
        "value": 400,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1114,
        "category": {
            "id": 1114,
            "name": "annual events"
        }
    },
    {
        "id": 11354,
        "answer": "Cybill Shepherd",
        "question": "This star sings the theme, \"Nice Work If You Can Get It\", for her self-titled sitcom",
        "value": 400,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 278,
        "category": {
            "id": 278,
            "name": "famous names"
        }
    },
    {
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
    },
    {
        "id": 11356,
        "answer": "John Mortimer",
        "question": "British barrister who brought us Rumpole of the Bailey",
        "value": 500,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1081,
        "category": {
            "id": 1081,
            "name": "authors"
        }
    },
    {
        "id": 11357,
        "answer": "Hinduism",
        "question": "Penitents pierce their bodies with hooks &amp; walk in a procession during Thaipusam, a festival of this religion",
        "value": 500,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1114,
        "category": {
            "id": 1114,
            "name": "annual events"
        }
    },
    {
        "id": 11358,
        "answer": "Wolfgang Puck",
        "question": "In 1983, a year after opening Spago, this celebrity chef opened Chinois On Main in Santa Monica, Calif.",
        "value": 500,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 278,
        "category": {
            "id": 278,
            "name": "famous names"
        }
    },
    {
        "id": 11359,
        "answer": "Fu Manchu",
        "question": "This long moustache with ends that droop past the chin is named for a Sax Rohmer villain",
        "value": 500,
        "airdate": "1997-03-14T12:00:00.000Z",
        "air_date": "1997-03-14",
        "category_id": 1840,
        "category": {
            "id": 1840,
            "name": "facial hair"
        }
    },
    {
        "id": 20349,
        "answer": "Seine",
        "question": "Villeneuve-Saint-Georges &amp; Rouen",
        "value": 1000,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6838,
        "category": {
            "id": 6838,
            "name": "a river runs through it"
        }
    },
    {
        "id": 23213,
        "answer": "Houston (Lee Brown)",
        "question": "This Texas city is the largest in the U.S. to have an African-American mayor",
        "value": 100,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 582,
        "category": {
            "id": 582,
            "name": "u.s. geography"
        }
    },
    {
        "id": 23214,
        "answer": "Buddy Holly",
        "question": "...&amp; the Crickets",
        "value": 100,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4437,
        "category": {
            "id": 4437,
            "name": "pop music pairings"
        }
    },
    {
        "id": 23215,
        "answer": "Leif Ericson",
        "question": "In the 990s this son of Erik the Red brought Christianity to Greenland",
        "value": 100,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4438,
        "category": {
            "id": 4438,
            "name": "historic people"
        }
    },
    {
        "id": 23216,
        "answer": "Bill Gates",
        "question": "Concerning a failed Windows 98 demonstration, he said, \"I guess we still have some bugs to work out\"",
        "value": 100,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4439,
        "category": {
            "id": 4439,
            "name": "1998 quotations"
        }
    },
    {
        "id": 23217,
        "answer": "Wool",
        "question": "This llama product is used to make hats, blankets &amp; fishing flies",
        "value": 100,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4440,
        "category": {
            "id": 4440,
            "name": "llama-rama"
        }
    },
    {
        "id": 23218,
        "answer": "Hostess",
        "question": "In 1967 this company introduced its chocolate-covered Ding Dong snack cakes",
        "value": 100,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4441,
        "category": {
            "id": 4441,
            "name": "ding dong"
        }
    },
    {
        "id": 23219,
        "answer": "18",
        "question": "Of 8, 12 or 18, the number of U.S. states that touch the Atlantic Ocean",
        "value": 200,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 582,
        "category": {
            "id": 582,
            "name": "u.s. geography"
        }
    },
    {
        "id": 23220,
        "answer": "Prince",
        "question": "...&amp; the New Power Generation",
        "value": 200,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4437,
        "category": {
            "id": 4437,
            "name": "pop music pairings"
        }
    },
    {
        "id": 23221,
        "answer": "Galileo",
        "question": "In 1589 he was appointed professor of mathematics at the University of Pisa",
        "value": 200,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4438,
        "category": {
            "id": 4438,
            "name": "historic people"
        }
    },
    {
        "id": 23222,
        "answer": "Camels",
        "question": "Llamas are the heftiest South American members of this animal family",
        "value": 200,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4440,
        "category": {
            "id": 4440,
            "name": "llama-rama"
        }
    },
    {
        "id": 23223,
        "answer": "Missouri, Nevada, Oklahoma &amp; Utah",
        "question": "2 of the 4 U.S. states that have capitals with \"City\" in their names",
        "value": 300,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 582,
        "category": {
            "id": 582,
            "name": "u.s. geography"
        }
    },
    {
        "id": 23224,
        "answer": "Peaches",
        "question": "...&amp; Herb",
        "value": 300,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4437,
        "category": {
            "id": 4437,
            "name": "pop music pairings"
        }
    },
    {
        "id": 23225,
        "answer": "Sir Robert Baden-Powell",
        "question": "\"Pig-Sticking or Hog-Hunting\" &amp; \"Scouting For Boys\" are among the books by this former British soldier",
        "value": 300,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4438,
        "category": {
            "id": 4438,
            "name": "historic people"
        }
    },
    {
        "id": 23226,
        "answer": "Helen Hunt",
        "question": "The difference between her \"Mad About You\" Emmys &amp; her Oscar was that the Oscar was \"Thinner and without wings\"",
        "value": 300,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4439,
        "category": {
            "id": 4439,
            "name": "1998 quotations"
        }
    },
    {
        "id": 23227,
        "answer": "Sheep",
        "question": "On farms, llamas, like Great Pyrenees dogs, most commonly guard these animals",
        "value": 300,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4440,
        "category": {
            "id": 4440,
            "name": "llama-rama"
        }
    },
    {
        "id": 23228,
        "answer": "KC",
        "question": "...&amp; the Sunshine Band",
        "value": 400,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4437,
        "category": {
            "id": 4437,
            "name": "pop music pairings"
        }
    },
    {
        "id": 23229,
        "answer": "Stomach",
        "question": "Like typical ruminants, llamas chew their cud, but have only 3 chambers in this organ",
        "value": 400,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4440,
        "category": {
            "id": 4440,
            "name": "llama-rama"
        }
    },
    {
        "id": 23230,
        "answer": "\"Ding-Dong! The Witch Is Dead\"",
        "question": "The Fifth Estate had a 1967 Top 20 hit with this song from a 1939 movie",
        "value": 400,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4441,
        "category": {
            "id": 4441,
            "name": "ding dong"
        }
    },
    {
        "id": 23231,
        "answer": "Miami",
        "question": "Vancouver is the northernmost city represented in the NBA; this is the southernmost",
        "value": 500,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 582,
        "category": {
            "id": 582,
            "name": "u.s. geography"
        }
    },
    {
        "id": 23232,
        "answer": "Mike",
        "question": "...&amp; the Mechanics",
        "value": 500,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4437,
        "category": {
            "id": 4437,
            "name": "pop music pairings"
        }
    },
    {
        "id": 23233,
        "answer": "Barbarossa",
        "question": "Holy Roman Emperor Frederick I was also known by this name that means \"red beard\"",
        "value": 500,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4438,
        "category": {
            "id": 4438,
            "name": "historic people"
        }
    },
    {
        "id": 23234,
        "answer": "Spitting",
        "question": "A female llama often lets a male llama know she is pregnant by sticking her nose up &amp; doing this",
        "value": 500,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4440,
        "category": {
            "id": 4440,
            "name": "llama-rama"
        }
    },
    {
        "id": 23235,
        "answer": "&lt;i&gt;Who Put The Bomp&lt;\/i&gt;",
        "question": "4-word title of the Barry Mann song that asks, \"Who put the ram in the rama lama ding dong?\"",
        "value": 500,
        "airdate": "2000-03-14T12:00:00.000Z",
        "air_date": "2000-03-14",
        "category_id": 4441,
        "category": {
            "id": 4441,
            "name": "ding dong"
        }
    },
    {
        "id": 27233,
        "answer": "Spain",
        "question": "On July 28 Peru celebrates its independence from this country",
        "value": 100,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5410,
        "category": {
            "id": 5410,
            "name": "independence days"
        }
    },
    {
        "id": 27234,
        "answer": "Writing",
        "question": "Historians generally agree that the development of this separates prehistory from history",
        "value": 100,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5412,
        "category": {
            "id": 5412,
            "name": "prehistoric times"
        }
    },
    {
        "id": 27235,
        "answer": "Great Britain\/England",
        "question": "February 7 is a great day in Grenada -- it celebrates its independence from this country",
        "value": 200,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5410,
        "category": {
            "id": 5410,
            "name": "independence days"
        }
    },
    {
        "id": 27236,
        "answer": "Elvis Presley",
        "question": "Though dead since 1977, he still helps guide tourists through Graceland on audiotape",
        "value": 200,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5411,
        "category": {
            "id": 5411,
            "name": "i got the music in me"
        }
    },
    {
        "id": 27237,
        "answer": "Horse",
        "question": "Eohippus was not an early hippopotamus, but the first one of these animals",
        "value": 200,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5412,
        "category": {
            "id": 5412,
            "name": "prehistoric times"
        }
    },
    {
        "id": 27238,
        "answer": "Babylon",
        "question": "An ancient Mesopotamian capital city on the Euphrates",
        "value": 200,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5413,
        "category": {
            "id": 5413,
            "name": "let it \"b\""
        }
    },
    {
        "id": 27239,
        "answer": "Hard-boiled",
        "question": "Adjective for the eggs seen here, or some P.I.s",
        "value": 200,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5414,
        "category": {
            "id": 5414,
            "name": "eggs-citement!"
        }
    },
    {
        "id": 27240,
        "answer": "Colombia",
        "question": "Panamanians celebrate November 3, the day of their independence from this country",
        "value": 300,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5410,
        "category": {
            "id": 5410,
            "name": "independence days"
        }
    },
    {
        "id": 27241,
        "answer": "Hard Rock Cafe",
        "question": "An Eric Clapton guitar in London was the first piece of memorabilia donated to this restaurant chain",
        "value": 300,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5411,
        "category": {
            "id": 5411,
            "name": "i got the music in me"
        }
    },
    {
        "id": 27242,
        "answer": "Glaciers",
        "question": "In the Pleistocene epoch, these gouged at gorges in river valleys; when they melted, rocks &amp; soil were left",
        "value": 300,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5412,
        "category": {
            "id": 5412,
            "name": "prehistoric times"
        }
    },
    {
        "id": 27243,
        "answer": "Boat people",
        "question": "These \"nautical\" refugees began fleeing Vietnam in the late 1970s",
        "value": 300,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5413,
        "category": {
            "id": 5413,
            "name": "let it \"b\""
        }
    },
    {
        "id": 27244,
        "answer": "Neanderthal",
        "question": "This \"man\" found in a German valley in 1856 was the first fossil recognized as a prehistoric human",
        "value": 400,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5412,
        "category": {
            "id": 5412,
            "name": "prehistoric times"
        }
    },
    {
        "id": 27245,
        "answer": "The Beastie Boys",
        "question": "These \"boys\" rapped their way to the top of the charts with the 1986 album \"Licensed to Ill\"",
        "value": 400,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5413,
        "category": {
            "id": 5413,
            "name": "let it \"b\""
        }
    },
    {
        "id": 27246,
        "answer": "Simple Simon",
        "question": "He \"Went a-hunting for to catch a hare\" after meeting a pieman going to the fair",
        "value": 400,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 677,
        "category": {
            "id": 677,
            "name": "mother goose"
        }
    },
    {
        "id": 27247,
        "answer": "Eggroll",
        "question": "Doris Day knows that with six you get this appetizer",
        "value": 400,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5414,
        "category": {
            "id": 5414,
            "name": "eggs-citement!"
        }
    },
    {
        "id": 27248,
        "answer": "Soviet Union\/Russia",
        "question": "On August 31 the people of Kyrgyzstan celebrate its break from this country",
        "value": 500,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5410,
        "category": {
            "id": 5410,
            "name": "independence days"
        }
    },
    {
        "id": 27249,
        "answer": "Juilliard",
        "question": "Tuition, fees &amp; expenses for this school at Lincoln Center will set back mom &amp; dad over $25,000 a year",
        "value": 500,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5411,
        "category": {
            "id": 5411,
            "name": "i got the music in me"
        }
    },
    {
        "id": 27250,
        "answer": "Carboniferous",
        "question": "This coal-forming period consisted of 2 portions:  Pennsylvanian &amp; Mississippian",
        "value": 500,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5412,
        "category": {
            "id": 5412,
            "name": "prehistoric times"
        }
    },
    {
        "id": 27251,
        "answer": "Blowfish",
        "question": "This inflating marine animal is also known as a puffer",
        "value": 500,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5413,
        "category": {
            "id": 5413,
            "name": "let it \"b\""
        }
    },
    {
        "id": 27252,
        "answer": "Wee Willie Winkie",
        "question": "This little guy \"Runs through the town, upstairs and downstairs, in his nightgown\"",
        "value": 500,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 677,
        "category": {
            "id": 677,
            "name": "mother goose"
        }
    },
    {
        "id": 27253,
        "answer": "Deviled eggs",
        "question": "\"Satanic\" satisfier served up here",
        "value": 500,
        "airdate": "2001-03-14T12:00:00.000Z",
        "air_date": "2001-03-14",
        "category_id": 5414,
        "category": {
            "id": 5414,
            "name": "eggs-citement!"
        }
    },
    {
        "id": 33180,
        "answer": "sand",
        "question": "This \"castle\"-making material is loosely defined as rock or mineral particles between 1\/400 &amp; 1\/12 inch",
        "value": 200,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6837,
        "category": {
            "id": 6837,
            "name": "\"sa\""
        }
    },
    {
        "id": 33181,
        "answer": "Danube",
        "question": "Vienna &amp; Bratislava",
        "value": 200,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6838,
        "category": {
            "id": 6838,
            "name": "a river runs through it"
        }
    },
    {
        "id": 33182,
        "answer": "Victoria",
        "question": "Until 1840 brides just wore their best dresses; then this young queen got married all in white",
        "value": 200,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6839,
        "category": {
            "id": 6839,
            "name": "customs &amp; traditions"
        }
    },
    {
        "id": 33183,
        "answer": "George Gershwin",
        "question": "Sadly, \"Porgy and Bess\" was the only full-length opera this composer wrote; he passed away in 1937, at age 38",
        "value": 200,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6841,
        "category": {
            "id": 6841,
            "name": "porgy-pourri"
        }
    },
    {
        "id": 33184,
        "answer": "safety",
        "question": "A synonym for shatterproof glass, or what shatterproof glass gives you",
        "value": 400,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6837,
        "category": {
            "id": 6837,
            "name": "\"sa\""
        }
    },
    {
        "id": 33185,
        "answer": "Hudson",
        "question": "Troy &amp; Albany",
        "value": 400,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6838,
        "category": {
            "id": 6838,
            "name": "a river runs through it"
        }
    },
    {
        "id": 33186,
        "answer": "sword",
        "question": "(Sofia of the Clue Crew)  The custom of mounting a horse from the left may have arisen when men wore one of these along their left legs",
        "value": 400,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6839,
        "category": {
            "id": 6839,
            "name": "customs &amp; traditions"
        }
    },
    {
        "id": 33187,
        "answer": "Zsa Zsa Gabor",
        "question": "This oft-married Hungarian opined, \"You never really know a man until you have divorced him\"",
        "value": 400,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6840,
        "category": {
            "id": 6840,
            "name": "quips"
        }
    },
    {
        "id": 33188,
        "answer": "sallow",
        "question": "It describes a sickly, yellowish complexion",
        "value": 600,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6837,
        "category": {
            "id": 6837,
            "name": "\"sa\""
        }
    },
    {
        "id": 33189,
        "answer": "Rhine",
        "question": "Bingen &amp; Bonn",
        "value": 600,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6838,
        "category": {
            "id": 6838,
            "name": "a river runs through it"
        }
    },
    {
        "id": 33190,
        "answer": "jumping over the net",
        "question": "Pro tennis abandoned the custom of the winner of a match doing this -- maybe someone got hurt",
        "value": 600,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6839,
        "category": {
            "id": 6839,
            "name": "customs &amp; traditions"
        }
    },
    {
        "id": 33191,
        "answer": "Fig Newton",
        "question": "I invented the Fig Leibniz; James Henry Mitchell came up with this better seller",
        "value": 600,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6842,
        "category": {
            "id": 6842,
            "name": "missed it by that much..."
        }
    },
    {
        "id": 33192,
        "answer": "Shannon",
        "question": "Killaloe &amp; Limerick",
        "value": 800,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6838,
        "category": {
            "id": 6838,
            "name": "a river runs through it"
        }
    },
    {
        "id": 33193,
        "answer": "dalmatians",
        "question": "These dogs are firehouse mascots because they had been bred to work with horses, which pulled firewagons",
        "value": 800,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6839,
        "category": {
            "id": 6839,
            "name": "customs &amp; traditions"
        }
    },
    {
        "id": 33194,
        "answer": "Gloria Steinem",
        "question": "\"A woman needs a man like a fish needs a bicycle\", said this Ms. founder who married David Bale in 2000",
        "value": 800,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6840,
        "category": {
            "id": 6840,
            "name": "quips"
        }
    },
    {
        "id": 33195,
        "answer": "salacious",
        "question": "Suggestive or downright indecent, like some writings &amp; pictures",
        "value": 1000,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6837,
        "category": {
            "id": 6837,
            "name": "\"sa\""
        }
    },
    {
        "id": 33196,
        "answer": "Charleston, South Carolina",
        "question": "The opera is based on a novel inspired by a real crime of passion committed in this Southern city",
        "value": 1000,
        "airdate": "2003-03-14T12:00:00.000Z",
        "air_date": "2003-03-14",
        "category_id": 6841,
        "category": {
            "id": 6841,
            "name": "porgy-pourri"
        }
    },
    {
        "id": 40115,
        "answer": "the big toe",
        "question": "Technically, this digit is the hallux",
        "value": 800,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8450,
        "category": {
            "id": 8450,
            "name": "\"big\" deal"
        }
    },
    {
        "id": 40212,
        "answer": "the Boston Massacre",
        "question": "In 1770 Adams defended Capt. Thomas Preston &amp; 6 others against murder charges for their part in this March 5 \"riot\"",
        "value": 200,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8445,
        "category": {
            "id": 8445,
            "name": "john adams"
        }
    },
    {
        "id": 40213,
        "answer": "sepia",
        "question": "This brown tint originally from a sea creature is used in photography",
        "value": 200,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8448,
        "category": {
            "id": 8448,
            "name": "shades of brown"
        }
    },
    {
        "id": 40214,
        "answer": "the vice presidency",
        "question": "Adams called it \"the most insignificant office that ever the invention of man contrived\"",
        "value": 400,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8445,
        "category": {
            "id": 8445,
            "name": "john adams"
        }
    },
    {
        "id": 40215,
        "answer": "Moor",
        "question": "Filipino Muslims are called Moros, the Spanish form of this English word",
        "value": 400,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8446,
        "category": {
            "id": 8446,
            "name": "in the minority"
        }
    },
    {
        "id": 40216,
        "answer": "runners",
        "question": "(Cheryl of the Clue Crew reads from Park City, UT.)  Kufens, which steer the luge, are attached to these, also called steels",
        "value": 400,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8447,
        "category": {
            "id": 8447,
            "name": "winter sports review"
        }
    },
    {
        "id": 40217,
        "answer": "cinnamon",
        "question": "An apple pie recipe in \"Joy of Cooking\" calls for 1\/2 teaspoon of this ground spice",
        "value": 400,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8448,
        "category": {
            "id": 8448,
            "name": "shades of brown"
        }
    },
    {
        "id": 40218,
        "answer": "the Basques",
        "question": "Initially, Spanish officials said that a group representing this minority did the 2004 train bombings",
        "value": 600,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8446,
        "category": {
            "id": 8446,
            "name": "in the minority"
        }
    },
    {
        "id": 40219,
        "answer": "his heart rate",
        "question": "(Jimmy of the Clue Crew lies prone with a rifle on a range in Park City, UT.)  To be steady enough to fire accurately, a biathlete has to quickly bring this down from the 200s to the 160s",
        "value": 600,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8447,
        "category": {
            "id": 8447,
            "name": "winter sports review"
        }
    },
    {
        "id": 40220,
        "answer": "Vandyke",
        "question": "A beard &amp; a shade of brown are both named this, after a Flemish painter",
        "value": 600,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8448,
        "category": {
            "id": 8448,
            "name": "shades of brown"
        }
    },
    {
        "id": 40221,
        "answer": "the Vietnam War",
        "question": "The original 11-1\/2\" long Joe began a long hiatus (or was he undercover?) the year after this real conflict ended",
        "value": 600,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8449,
        "category": {
            "id": 8449,
            "name": "g.i. joe"
        }
    },
    {
        "id": 40222,
        "answer": "a bighorn sheep",
        "question": "A large wild sheep of North America",
        "value": 600,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8450,
        "category": {
            "id": 8450,
            "name": "\"big\" deal"
        }
    },
    {
        "id": 40223,
        "answer": "the Federalists",
        "question": "John Adams belonged to this party that favored a strong central government",
        "value": 800,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8445,
        "category": {
            "id": 8445,
            "name": "john adams"
        }
    },
    {
        "id": 40224,
        "answer": "Israel",
        "question": "Arabs make up 20% of this country; they vote, serve in the army &amp; are represented in Parliament by the United Arab List",
        "value": 800,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8446,
        "category": {
            "id": 8446,
            "name": "in the minority"
        }
    },
    {
        "id": 40225,
        "answer": "the curl (curling accepted)",
        "question": "(Jimmy of the Clue Crew narrates a game being played on a rink in Park City, UT.)   As well as speeding up the stone by reducing friction, sweeping reduces side-to-side movement, which logically is called this",
        "value": 800,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8447,
        "category": {
            "id": 8447,
            "name": "winter sports review"
        }
    },
    {
        "id": 40226,
        "answer": "russet",
        "question": "A potato &amp; a winter apple with a rough brownish skin have this brown name",
        "value": 800,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8448,
        "category": {
            "id": 8448,
            "name": "shades of brown"
        }
    },
    {
        "id": 40227,
        "answer": "the XYZ Affair",
        "question": "This diplomatic \"affair\" led Americans to cry, \"Millions for defense... but not one cent for tribute\"",
        "value": 1000,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8445,
        "category": {
            "id": 8445,
            "name": "john adams"
        }
    },
    {
        "id": 40228,
        "answer": "the tuck",
        "question": "(Jimmy of the Clue Crew crouches as he skis down a slope in Park City, UT.)  Aerodynamically, this is the best position for shushing, or speeding straight down the hill",
        "value": 1000,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8447,
        "category": {
            "id": 8447,
            "name": "winter sports review"
        }
    },
    {
        "id": 40229,
        "answer": "umber",
        "question": "Astronomers know that the name of this brown comes from the Latin for \"shadow\"",
        "value": 1000,
        "airdate": "2005-03-14T12:00:00.000Z",
        "air_date": "2005-03-14",
        "category_id": 8448,
        "category": {
            "id": 8448,
            "name": "shades of brown"
        }
    },
    {
        "id": 44570,
        "answer": "Moscow",
        "question": "Aleksandr Pushkin",
        "value": 200,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 5603,
        "category": {
            "id": 5603,
            "name": "capital city birthplaces"
        }
    },
    {
        "id": 44571,
        "answer": "Calamity Jane",
        "question": "See Jane.  See Jane born in 1852.  See Jane dress &amp; swear like a cowboy.  Expletive deleted, Jane!  Expletive deleted",
        "value": 200,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9461,
        "category": {
            "id": 9461,
            "name": "fun with dick &amp; jane"
        }
    },
    {
        "id": 44572,
        "answer": "the Confederate Army",
        "question": "Fort Bragg is named for a native North Carolinian West Point grad &amp; general in this army",
        "value": 400,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9459,
        "category": {
            "id": 9459,
            "name": "around fort bragg"
        }
    },
    {
        "id": 44573,
        "answer": "Paris",
        "question": "Charles Baudelaire",
        "value": 400,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 5603,
        "category": {
            "id": 5603,
            "name": "capital city birthplaces"
        }
    },
    {
        "id": 44574,
        "answer": "the Apostles",
        "question": "As pope, Benedict XVI holds the title \"Successor of St. Peter, Prince of\" this historic 12",
        "value": 400,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9462,
        "category": {
            "id": 9462,
            "name": "pope-eye"
        }
    },
    {
        "id": 44575,
        "answer": "Pittsburgh",
        "question": "Birmingham, Alabama is known as this Pennsylvania city \"of the South\"",
        "value": 400,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9463,
        "category": {
            "id": 9463,
            "name": "sweet \"p\""
        }
    },
    {
        "id": 44576,
        "answer": "Stockholm",
        "question": "Alfred Nobel",
        "value": 600,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 5603,
        "category": {
            "id": 5603,
            "name": "capital city birthplaces"
        }
    },
    {
        "id": 44577,
        "answer": "Dick Gregory",
        "question": "See Dick.  See Dick fight for civil rights.  Right on, Dick.  Right on",
        "value": 600,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9461,
        "category": {
            "id": 9461,
            "name": "fun with dick &amp; jane"
        }
    },
    {
        "id": 44579,
        "answer": "Galileo",
        "question": "In 1992 the Pope publicly announced that the Church had made a mistake condemning this man in 1633",
        "value": 600,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9462,
        "category": {
            "id": 9462,
            "name": "pope-eye"
        }
    },
    {
        "id": 44580,
        "answer": "Hercule Poirot",
        "question": "Appropriately, \"Curtain\" was the final mystery for this sleuth; he dies at the end of the book",
        "value": 600,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9463,
        "category": {
            "id": 9463,
            "name": "sweet \"p\""
        }
    },
    {
        "id": 44581,
        "answer": "the WACs",
        "question": "The first of these female units that helped the U.S. during WWII arrived at Fort Bragg in 1943",
        "value": 800,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9459,
        "category": {
            "id": 9459,
            "name": "around fort bragg"
        }
    },
    {
        "id": 44582,
        "answer": "Chapel Hill",
        "question": "Duke hoopsters get psyched to go from Durham to this city to play UNC",
        "value": 800,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9460,
        "category": {
            "id": 9460,
            "name": "college sports rivalries"
        }
    },
    {
        "id": 44583,
        "answer": "Madrid",
        "question": "Julio Iglesias",
        "value": 800,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 5603,
        "category": {
            "id": 5603,
            "name": "capital city birthplaces"
        }
    },
    {
        "id": 44584,
        "answer": "Dick Armey",
        "question": "See Dick.  See Dick step down as U.S. House Majority Leader in 2003.  Relax, Dick.  Relax",
        "value": 800,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9461,
        "category": {
            "id": 9461,
            "name": "fun with dick &amp; jane"
        }
    },
    {
        "id": 44585,
        "answer": "personification",
        "question": "15-letter word for the attribution of human qualities to objects or abstract notions",
        "value": 800,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9463,
        "category": {
            "id": 9463,
            "name": "sweet \"p\""
        }
    },
    {
        "id": 44586,
        "answer": "Alabama &amp; Auburn",
        "question": "The \"Iron Bowl\" is between these 2 \"Heart of Dixie\" teams",
        "value": 1000,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9460,
        "category": {
            "id": 9460,
            "name": "college sports rivalries"
        }
    },
    {
        "id": 44587,
        "answer": "London",
        "question": "Edmund Spenser",
        "value": 1000,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 5603,
        "category": {
            "id": 5603,
            "name": "capital city birthplaces"
        }
    },
    {
        "id": 44589,
        "answer": "(Lady) Jane Grey",
        "question": "See Jane.  See Jane marry Lord Guildford Dudley at age 15 in 1553.  See Jane have a rough 1554.  Heads up, Jane.  Heads up",
        "value": 1000,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9461,
        "category": {
            "id": 9461,
            "name": "fun with dick &amp; jane"
        }
    },
    {
        "id": 44590,
        "answer": "the years of Jesus's life (the age of Jesus accepted)",
        "question": "In 1389 Pope Urban VI declared the Holy Year would be every 33 years--the 33 signifying this",
        "value": 1000,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9462,
        "category": {
            "id": 9462,
            "name": "pope-eye"
        }
    },
    {
        "id": 44591,
        "answer": "propane",
        "question": "If you travel here by Winnebago, you might know that C3H8 is the formula for this flammable gas",
        "value": 1000,
        "airdate": "2006-03-14T12:00:00.000Z",
        "air_date": "2006-03-14",
        "category_id": 9463,
        "category": {
            "id": 9463,
            "name": "sweet \"p\""
        }
    },
    {
        "id": 48783,
        "answer": "death",
        "question": "In Greek myth Hypnos was the god of sleep; his brother Thanatos was the god of this more permanent state",
        "value": 200,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 680,
        "category": {
            "id": 680,
            "name": "mythology"
        }
    },
    {
        "id": 48784,
        "answer": "the Alamo",
        "question": "Founded as a Franciscan mission in 1718, Mission San Antonio de Valero became better-known in history under this name",
        "value": 200,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10408,
        "category": {
            "id": 10408,
            "name": "it happened in texas"
        }
    },
    {
        "id": 48785,
        "answer": "Mount Rushmore",
        "question": "From 1927 to 1931 dynamite blasts removed 450,000 tons of rock from this mountain &amp; national memorial",
        "value": 200,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10409,
        "category": {
            "id": 10409,
            "name": "boom goes the dynamite!"
        }
    },
    {
        "id": 48786,
        "answer": "Earth",
        "question": "This planet has a greater mean density than any of the others in our solar system",
        "value": 200,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10410,
        "category": {
            "id": 10410,
            "name": "a date with density"
        }
    },
    {
        "id": 48787,
        "answer": "the Aztecs",
        "question": "Not a bad gig: Omacatl was the god of joy, festvity &amp; happiness in the pantheon of these people",
        "value": 400,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 680,
        "category": {
            "id": 680,
            "name": "mythology"
        }
    },
    {
        "id": 48788,
        "answer": "Laura Bush",
        "question": "On Nov. 25, 1981, she gave birth to twins in Dallas",
        "value": 400,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10408,
        "category": {
            "id": 10408,
            "name": "it happened in texas"
        }
    },
    {
        "id": 48789,
        "answer": "a dam",
        "question": "In 1884 farmers whose alfalfa fields had been flooded dynamited one of these on the Humboldt River",
        "value": 400,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10409,
        "category": {
            "id": 10409,
            "name": "boom goes the dynamite!"
        }
    },
    {
        "id": 48790,
        "answer": "New Jersey",
        "question": "With more than 1,000 people per square mile, this East Coast state has the highest population density in the U.S.",
        "value": 400,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10410,
        "category": {
            "id": 10410,
            "name": "a date with density"
        }
    },
    {
        "id": 48791,
        "answer": "ragtime",
        "question": "Scott Joplin is a famous performer &amp; composer of this musical style",
        "value": 400,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10411,
        "category": {
            "id": 10411,
            "name": "\"time\" for a change"
        }
    },
    {
        "id": 48792,
        "answer": "Atlas",
        "question": "In the title of an Ayn Rand novel, this mythological figure \"Shrugged\"",
        "value": 600,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 680,
        "category": {
            "id": 680,
            "name": "mythology"
        }
    },
    {
        "id": 48793,
        "answer": "Seattle",
        "question": "In 2000, 5800 separate explosions brought down the Kingdome in this city",
        "value": 600,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10409,
        "category": {
            "id": 10409,
            "name": "boom goes the dynamite!"
        }
    },
    {
        "id": 48794,
        "answer": "a pastime",
        "question": "A pleasant means of amusement, like a game of cards or a backyard sport; we have a \"national\" one",
        "value": 600,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10411,
        "category": {
            "id": 10411,
            "name": "\"time\" for a change"
        }
    },
    {
        "id": 48795,
        "answer": "Charles Lindbergh",
        "question": "In March 1929 this pilot inaugurated the airmail service between Brownsville, Texas &amp; Mexico",
        "value": 800,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10408,
        "category": {
            "id": 10408,
            "name": "it happened in texas"
        }
    },
    {
        "id": 48796,
        "answer": "(Alfred) Nobel",
        "question": "In 1867 this Swedish inventor found kieselguhr, a type of chalky earth, absorbed a lot of nitroglycerine",
        "value": 800,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10409,
        "category": {
            "id": 10409,
            "name": "boom goes the dynamite!"
        }
    },
    {
        "id": 48797,
        "answer": "maritime",
        "question": "This adjective means \"connected to the sea\", like some Canadian provinces",
        "value": 800,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10411,
        "category": {
            "id": 10411,
            "name": "\"time\" for a change"
        }
    },
    {
        "id": 48798,
        "answer": "Andromeda",
        "question": "As a constellation, this mythological princess is chained to a rock as a sacrifice to a sea monster",
        "value": 1000,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 680,
        "category": {
            "id": 680,
            "name": "mythology"
        }
    },
    {
        "id": 48799,
        "answer": "lipoproteins",
        "question": "HDLs, considered a good form of cholesterol, are short for high-density these",
        "value": 1000,
        "airdate": "2007-03-14T12:00:00.000Z",
        "air_date": "2007-03-14",
        "category_id": 10410,
        "category": {
            "id": 10410,
            "name": "a date with density"
        }
    },
    {
        "id": 52952,
        "answer": "Muhammad Ali",
        "question": "Between May 1965 &amp; March 1967, he defended his heavyweight boxing title an amazing 9 times",
        "value": 200,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11300,
        "category": {
            "id": 11300,
            "name": "1960s sports legends"
        }
    },
    {
        "id": 52953,
        "answer": "George W. Bush",
        "question": "On Jan. 20, 2009 this man will lose his $400,000-a-year (plus 50 grand in expenses) federal government job",
        "value": 200,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11301,
        "category": {
            "id": 11301,
            "name": "we predict the future!"
        }
    },
    {
        "id": 52954,
        "answer": "&lt;i&gt;The Hobbit&lt;\/i&gt;",
        "question": "1937:\"I have chosen Mr. Baggins and that ought to be enough for all of you\"",
        "value": 200,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 3100,
        "category": {
            "id": 3100,
            "name": "name the novel"
        }
    },
    {
        "id": 52955,
        "answer": "pumpkins",
        "question": "Dremel makes a 14,000-rpm tool for cutting these, a traditional October activity",
        "value": 200,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11302,
        "category": {
            "id": 11302,
            "name": "the tool shed"
        }
    },
    {
        "id": 52956,
        "answer": "Gale Sayers",
        "question": "The most points an NFL player has scored in a game in the last 50 years is 36 by this Bears halfback on Dec. 12, 1965",
        "value": 400,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11300,
        "category": {
            "id": 11300,
            "name": "1960s sports legends"
        }
    },
    {
        "id": 52957,
        "answer": "&lt;i&gt;Pride and Prejudice&lt;\/i&gt;",
        "question": "1813: \"Happy for all her maternal feelings was the day...Mrs. Bennet got rid of her 2 most deserving daughters\"",
        "value": 400,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 3100,
        "category": {
            "id": 3100,
            "name": "name the novel"
        }
    },
    {
        "id": 52958,
        "answer": "a table saw",
        "question": "The kerf is the groove being cut; if this tool gets pinched in the kerf, deadly kickback can result",
        "value": 400,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11302,
        "category": {
            "id": 11302,
            "name": "the tool shed"
        }
    },
    {
        "id": 52959,
        "answer": "(Princess) Margaret",
        "question": "Member of the royal family who was reputedly planning to marry Peter Townshend",
        "value": 400,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11303,
        "category": {
            "id": 11303,
            "name": "\"arg\"!"
        }
    },
    {
        "id": 52960,
        "answer": "Bill Russell",
        "question": "In the 1960s, 2 NBA players won MVP awards 4 times: Wilt Chamberlain &amp; this Boston Celtics center",
        "value": 600,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11300,
        "category": {
            "id": 11300,
            "name": "1960s sports legends"
        }
    },
    {
        "id": 52961,
        "answer": "the Census",
        "question": "By Dec. 31, 2010 this Bureau will have submitted state population totals to the president (well, it better have)",
        "value": 600,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11301,
        "category": {
            "id": 11301,
            "name": "we predict the future!"
        }
    },
    {
        "id": 52962,
        "answer": "&lt;i&gt;Brave New World&lt;\/i&gt;",
        "question": "1932:\"In the 4,000 rooms of the Centre the 4,000 electric clocks simultaneously struck four\"",
        "value": 600,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 3100,
        "category": {
            "id": 3100,
            "name": "name the novel"
        }
    },
    {
        "id": 52963,
        "answer": "a bolt",
        "question": "Seen here is the tool called a cutter for this fastener",
        "value": 600,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11302,
        "category": {
            "id": 11302,
            "name": "the tool shed"
        }
    },
    {
        "id": 52964,
        "answer": "the Argonauts",
        "question": "Jason led this famous group of sailors",
        "value": 600,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11303,
        "category": {
            "id": 11303,
            "name": "\"arg\"!"
        }
    },
    {
        "id": 52965,
        "answer": "Titan",
        "question": "This largest moon of Saturn is the only one in the solar system with a reasonably dense atmosphere",
        "value": 800,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 444,
        "category": {
            "id": 444,
            "name": "the solar system"
        }
    },
    {
        "id": 52966,
        "answer": "Billie Jean King",
        "question": "In 1963 she appeared in her first Wimbledon singles title match under her maiden name, Moffitt",
        "value": 800,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11300,
        "category": {
            "id": 11300,
            "name": "1960s sports legends"
        }
    },
    {
        "id": 52967,
        "answer": "Colombia",
        "question": "On July 20, 2010 this S. American country will kick back with some good coffee to celebrate 200 years of indep.",
        "value": 800,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11301,
        "category": {
            "id": 11301,
            "name": "we predict the future!"
        }
    },
    {
        "id": 52968,
        "answer": "&lt;i&gt;Heart of Darkness&lt;\/i&gt;",
        "question": "1902:\"The horror!The horror!\"",
        "value": 800,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 3100,
        "category": {
            "id": 3100,
            "name": "name the novel"
        }
    },
    {
        "id": 52969,
        "answer": "pliers",
        "question": "The Hercules model Swiss Army knife includes a pair of these with itty-bitty jaws &amp; wire crimper",
        "value": 800,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11302,
        "category": {
            "id": 11302,
            "name": "the tool shed"
        }
    },
    {
        "id": 52970,
        "answer": "bargain",
        "question": "Be a cheapskate and tell us this word that can precede \"basement\" or \"counter\"",
        "value": 800,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11303,
        "category": {
            "id": 11303,
            "name": "\"arg\"!"
        }
    },
    {
        "id": 52971,
        "answer": "Uranus",
        "question": "On March 10, 1977 astronomers discovered this 7th planet from the sun also had rings",
        "value": 1000,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 444,
        "category": {
            "id": 444,
            "name": "the solar system"
        }
    },
    {
        "id": 52972,
        "answer": "Don Garlits",
        "question": "On August 1, 1964 this man nicknamed \"Big Daddy\" became the first in drag racing history to exceed 200 mph",
        "value": 1000,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11300,
        "category": {
            "id": 11300,
            "name": "1960s sports legends"
        }
    },
    {
        "id": 52973,
        "answer": "London",
        "question": "On July 27, 2012 the Summer Olympics will open in this world capital",
        "value": 1000,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11301,
        "category": {
            "id": 11301,
            "name": "we predict the future!"
        }
    },
    {
        "id": 52974,
        "answer": "&lt;i&gt;Stranger In A Strange Land&lt;\/i&gt;",
        "question": "1961:\"Once upon a time there was a Martian named Valentine Michael Smith\"",
        "value": 1000,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 3100,
        "category": {
            "id": 3100,
            "name": "name the novel"
        }
    },
    {
        "id": 52975,
        "answer": "argyle",
        "question": "This diamond-shaped pattern is named for a clan whose tartan it was patterned after",
        "value": 1000,
        "airdate": "2008-03-14T12:00:00.000Z",
        "air_date": "2008-03-14",
        "category_id": 11303,
        "category": {
            "id": 11303,
            "name": "\"arg\"!"
        }
    },
    {
        "id": 63947,
        "answer": "the marathon",
        "question": "2 hours, 6 minutes, 32 seconds by Samuel Kamau Wansiru",
        "value": 200,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14072,
        "category": {
            "id": 14072,
            "name": "olympic track &amp; field records"
        }
    },
    {
        "id": 63948,
        "answer": "the margarita",
        "question": "The name of this tequila cocktail is also a first name, the one Rita Hayworth was given at birth",
        "value": 200,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14073,
        "category": {
            "id": 14073,
            "name": "habla espanol?"
        }
    },
    {
        "id": 63949,
        "answer": "Ohio",
        "question": "In 2009 a bank in this buckeye state got tipped off to a robbery when a man in a ski mask waited patiently in line",
        "value": 200,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 8884,
        "category": {
            "id": 8884,
            "name": "dumb criminals"
        }
    },
    {
        "id": 63950,
        "answer": "a pack",
        "question": "The territory of one of these wolf family units can extend more than 1,000 square milesl",
        "value": 200,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14074,
        "category": {
            "id": 14074,
            "name": "we are the wolves"
        }
    },
    {
        "id": 63951,
        "answer": "Lionel Richie",
        "question": "Of this \"We Are The World\" co-writer: Miles, Sofia &amp; Nicole",
        "value": 200,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14075,
        "category": {
            "id": 14075,
            "name": "we are the children"
        }
    },
    {
        "id": 63952,
        "answer": "Little Rock",
        "question": "A man called the home he just robbed in this Arkansas capital to say he dropped his wallet there &amp; wanted it back",
        "value": 400,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 8884,
        "category": {
            "id": 8884,
            "name": "dumb criminals"
        }
    },
    {
        "id": 63953,
        "answer": "Johann Sebastian Bach",
        "question": "Of this composer: 20(!) of us, including 5 Johanns &amp; 2 Johannas",
        "value": 400,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14075,
        "category": {
            "id": 14075,
            "name": "we are the children"
        }
    },
    {
        "id": 63954,
        "answer": "record",
        "question": "In 2009 a thief broke into an NBC news van; in failing to steal a bolted-down camera, he hit this button by mistake",
        "value": 600,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 8884,
        "category": {
            "id": 8884,
            "name": "dumb criminals"
        }
    },
    {
        "id": 63955,
        "answer": "the coyote",
        "question": "Some experts believe the smaller red wolf to be a hybrid of the gray wolf &amp; this wily relative",
        "value": 600,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14074,
        "category": {
            "id": 14074,
            "name": "we are the wolves"
        }
    },
    {
        "id": 63956,
        "answer": "toreador (or matador)",
        "question": "A picador is the mounted assistant to this, a synonym for bullfighter &amp; torero",
        "value": 800,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14073,
        "category": {
            "id": 14073,
            "name": "habla espanol?"
        }
    },
    {
        "id": 63957,
        "answer": "Yellowstone",
        "question": "In 1995 wolves from Canada were reintroduced into this U.S. national park",
        "value": 800,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14074,
        "category": {
            "id": 14074,
            "name": "we are the wolves"
        }
    },
    {
        "id": 63958,
        "answer": "Henry VIII",
        "question": "Of this monarch: Mary, Elizabeth, Edward",
        "value": 800,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14075,
        "category": {
            "id": 14075,
            "name": "we are the children"
        }
    },
    {
        "id": 63959,
        "answer": "the decathlon",
        "question": "8,893 points by Roman Sebrle",
        "value": 1000,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14072,
        "category": {
            "id": 14072,
            "name": "olympic track &amp; field records"
        }
    },
    {
        "id": 63960,
        "answer": "sierra",
        "question": "This Spanish word for a chain of mountains means \"saw\": the peaks suggest the teeth of a saw",
        "value": 1000,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14073,
        "category": {
            "id": 14073,
            "name": "habla espanol?"
        }
    },
    {
        "id": 63961,
        "answer": "a La-Z-Boy",
        "question": "A Minnesota man got a DUI for driving not a car but a redesigned recliner from this hyphenated Co.; it could go 20 mph",
        "value": 1000,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 8884,
        "category": {
            "id": 8884,
            "name": "dumb criminals"
        }
    },
    {
        "id": 63962,
        "answer": "Ethiopia",
        "question": "The Abyssinian wolf, native to the highlands of this country, is also called the simian jackal",
        "value": 1000,
        "airdate": "2011-03-14T12:00:00.000Z",
        "air_date": "2011-03-14",
        "category_id": 14074,
        "category": {
            "id": 14074,
            "name": "we are the wolves"
        }
    },
    {
        "id": 68172,
        "answer": "the Great Salt Lake",
        "question": "A railroad causeway cuts this Utah lake in half, causing red algae to grow on one side &amp; green algae on the other side",
        "value": 200,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 11193,
        "category": {
            "id": 11193,
            "name": "look out below"
        }
    },
    {
        "id": 68173,
        "answer": "Brown",
        "question": "Founded in Warren, Rhode Island, it moved to Providence in 1770",
        "value": 400,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15130,
        "category": {
            "id": 15130,
            "name": "ivy league schools"
        }
    },
    {
        "id": 68174,
        "answer": "Portland",
        "question": "You can see the fall colors around this largest city in Maine",
        "value": 400,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 11193,
        "category": {
            "id": 11193,
            "name": "look out below"
        }
    },
    {
        "id": 68175,
        "answer": "ham hock",
        "question": "(Jimmy of the Clue Crew shows a pig diagram on the monitor.)  In the South, soups, greens, &amp; bean dishes get added flavor from this part of the pig, referred to by an alliterative name",
        "value": 400,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 1669,
        "category": {
            "id": 1669,
            "name": "american food"
        }
    },
    {
        "id": 68176,
        "answer": "Bob Marley",
        "question": "In the song \"Give It Away\", the Red Hot Chili Peppers call this reggae legend \"a poet and a prophet\"",
        "value": 400,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15132,
        "category": {
            "id": 15132,
            "name": "singers in songs"
        }
    },
    {
        "id": 68177,
        "answer": "Mount St. Helens",
        "question": "More than 30 years after it erupted in Washington State, you can see still see the blast &amp; debris zone from this volcano",
        "value": 600,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 11193,
        "category": {
            "id": 11193,
            "name": "look out below"
        }
    },
    {
        "id": 68178,
        "answer": "a po' boy",
        "question": "Benny &amp; Clovis Martin are credited with creating this New Orleans version of a hero or sub sandwich back in the 1920s",
        "value": 600,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 1669,
        "category": {
            "id": 1669,
            "name": "american food"
        }
    },
    {
        "id": 68179,
        "answer": "Manila Bay",
        "question": "On May 1, 1898 a U.S. fleet under George Dewey destroyed a Spanish fleet in this bay",
        "value": 600,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15131,
        "category": {
            "id": 15131,
            "name": "the splendid little war"
        }
    },
    {
        "id": 68180,
        "answer": "Chardonnay",
        "question": "A song by Big Sean says, \"Just to set the mood, girl I brought some Marvin Gaye\" &amp; this kind of white wine (it rhymes)",
        "value": 600,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15132,
        "category": {
            "id": 15132,
            "name": "singers in songs"
        }
    },
    {
        "id": 68181,
        "answer": "Dartmouth",
        "question": "It grew out of a single log hut in the New Hampshire wilderness",
        "value": 800,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15130,
        "category": {
            "id": 15130,
            "name": "ivy league schools"
        }
    },
    {
        "id": 68182,
        "answer": "Concord grapes",
        "question": "Juice, jellies, &amp; jams are made with this American fruit variety seen here",
        "value": 800,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 1669,
        "category": {
            "id": 1669,
            "name": "american food"
        }
    },
    {
        "id": 68183,
        "answer": "Buffalo Soldiers",
        "question": "African-American troops known as this animal type of \"soldiers\" played an important role in combat in Cuba",
        "value": 800,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15131,
        "category": {
            "id": 15131,
            "name": "the splendid little war"
        }
    },
    {
        "id": 68184,
        "answer": "Brian Wilson",
        "question": "The chorus of a song by Barenaked Ladies says, \"Lying in bed just like\" this Beach Boy \"did\"",
        "value": 800,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15132,
        "category": {
            "id": 15132,
            "name": "singers in songs"
        }
    },
    {
        "id": 68185,
        "answer": "Princeton",
        "question": "The Woodrow Wilson School of Public &amp; International Affairs is located at this university",
        "value": 1000,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15130,
        "category": {
            "id": 15130,
            "name": "ivy league schools"
        }
    },
    {
        "id": 68186,
        "answer": "an eclipse",
        "question": "A photo from the space station shows an umbral shadow across Turkey, caused by this phenomenon",
        "value": 1000,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 11193,
        "category": {
            "id": 11193,
            "name": "look out below"
        }
    },
    {
        "id": 68187,
        "answer": "Derby Pie",
        "question": "This trademarked Louisville chocolate nut dessert derives its name from being served on the first Saturday in May",
        "value": 1000,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 1669,
        "category": {
            "id": 1669,
            "name": "american food"
        }
    },
    {
        "id": 68188,
        "answer": "Gatling guns",
        "question": "Teddy Roosevelt called the sound of these early machine guns \"the only sound I ever heard my men cheer in battle\"",
        "value": 1000,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15131,
        "category": {
            "id": 15131,
            "name": "the splendid little war"
        }
    },
    {
        "id": 68189,
        "answer": "\"Moves Like Jagger\"",
        "question": "Mick gave his blessing (&amp; footage for the video) for this 2011 collaboration by Maroon 5 &amp; Christina Aguilera",
        "value": 1000,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15132,
        "category": {
            "id": 15132,
            "name": "singers in songs"
        }
    },
    {
        "id": 72508,
        "answer": "Apple",
        "question": "5-letter pome fruit of the family Rosaceae",
        "value": 200,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16168,
        "category": {
            "id": 16168,
            "name": "sounds like a tech brand"
        }
    },
    {
        "id": 72509,
        "answer": "Bonnie &amp; Clyde",
        "question": "On May 21, 1934 this duo attended a party at Black Lake, Louisiana; 2 days later, they were killed by the law",
        "value": 200,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 1513,
        "category": {
            "id": 1513,
            "name": "the 1930s"
        }
    },
    {
        "id": 72510,
        "answer": "hailstone",
        "question": "On March 9, 2012 a grapefruit-sized one of these, the largest ever found in Hawaii, fell in an Oahu thunderstorm",
        "value": 200,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 525,
        "category": {
            "id": 525,
            "name": "stones"
        }
    },
    {
        "id": 72511,
        "answer": "swine",
        "question": "A bunch of pigs (5)",
        "value": 200,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 3296,
        "category": {
            "id": 3296,
            "name": "crossword clues \"s\""
        }
    },
    {
        "id": 72512,
        "answer": "the (Chicago) Bears",
        "question": "Steve Grogan quarterbacked the Pats in Super Bowl XX when Jim McMahon &amp; this team beat them by 36",
        "value": 200,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16169,
        "category": {
            "id": 16169,
            "name": "ex-patriots"
        }
    },
    {
        "id": 72513,
        "answer": "Tibet",
        "question": "Some people of this region, officially part of China, use a white triangle flag to represent its location among high mountains",
        "value": 400,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 4059,
        "category": {
            "id": 4059,
            "name": "flags of the world"
        }
    },
    {
        "id": 72514,
        "answer": "Mount Everest",
        "question": "On April 3, 1933 Lord Clydesdale became the first to pilot a plane over this mountain, just clearing it",
        "value": 400,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 1513,
        "category": {
            "id": 1513,
            "name": "the 1930s"
        }
    },
    {
        "id": 72515,
        "answer": "Stonehenge",
        "question": "The heel stone, the slaughter stone &amp; the station stones are among those found at this British landmark",
        "value": 400,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 525,
        "category": {
            "id": 525,
            "name": "stones"
        }
    },
    {
        "id": 72516,
        "answer": "sage",
        "question": "Wise herb (4)",
        "value": 400,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 3296,
        "category": {
            "id": 3296,
            "name": "crossword clues \"s\""
        }
    },
    {
        "id": 72517,
        "answer": "foot",
        "question": "Adam Vinatieri used his right one as time expired on Feb. 3, 2002 to give the Patriots their first Super Bowl victory",
        "value": 400,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16169,
        "category": {
            "id": 16169,
            "name": "ex-patriots"
        }
    },
    {
        "id": 72518,
        "answer": "Dell",
        "question": "A small wooded valley, perhaps with a farmer",
        "value": 600,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16168,
        "category": {
            "id": 16168,
            "name": "sounds like a tech brand"
        }
    },
    {
        "id": 72519,
        "answer": "(Doug) Flutie",
        "question": "This diminutive 1984 Heisman winner for Boston College played his last NFL season as a Patriot",
        "value": 600,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16169,
        "category": {
            "id": 16169,
            "name": "ex-patriots"
        }
    },
    {
        "id": 72520,
        "answer": "Commodore",
        "question": "A former U.S. Navy rank between captains &amp; admirals",
        "value": 800,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16168,
        "category": {
            "id": 16168,
            "name": "sounds like a tech brand"
        }
    },
    {
        "id": 72521,
        "answer": "Czechoslovakia",
        "question": "In March 1939, after Hitler made Bohemia &amp; Moravia a German protectorate, this country ceased to exist",
        "value": 800,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 1513,
        "category": {
            "id": 1513,
            "name": "the 1930s"
        }
    },
    {
        "id": 72522,
        "answer": "millstone",
        "question": "A heavy weight or burden around the neck, as mentioned in Luke 17",
        "value": 800,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 525,
        "category": {
            "id": 525,
            "name": "stones"
        }
    },
    {
        "id": 72523,
        "answer": "Samson",
        "question": "Biblical Hercules (6)",
        "value": 800,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 3296,
        "category": {
            "id": 3296,
            "name": "crossword clues \"s\""
        }
    },
    {
        "id": 72524,
        "answer": "Randy Moss",
        "question": "He hauled in 47 receiving touchdowns for the Pats from 2007 to 2009",
        "value": 800,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16169,
        "category": {
            "id": 16169,
            "name": "ex-patriots"
        }
    },
    {
        "id": 72525,
        "answer": "Oracle",
        "question": "A famous one in ancient Greece bathed in the Castalian Spring before speaking",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16168,
        "category": {
            "id": 16168,
            "name": "sounds like a tech brand"
        }
    },
    {
        "id": 72526,
        "answer": "Nicaragua",
        "question": "Honduras &amp; this next-door neighbor to the south &amp; east both have horizontally striped blue &amp; white flags",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 4059,
        "category": {
            "id": 4059,
            "name": "flags of the world"
        }
    },
    {
        "id": 72527,
        "answer": "Gandhi",
        "question": "After a week-long fast, he was released from government detention in Aug. 1933, weighing about 90 pounds",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 1513,
        "category": {
            "id": 1513,
            "name": "the 1930s"
        }
    },
    {
        "id": 72528,
        "answer": "curling",
        "question": "Blue Hone granite, found on the Scottish island of Ailsa Craig, is the favorite stone used in this sport",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 525,
        "category": {
            "id": 525,
            "name": "stones"
        }
    },
    {
        "id": 72529,
        "answer": "salutation",
        "question": "Dear sir or madam (10)",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 3296,
        "category": {
            "id": 3296,
            "name": "crossword clues \"s\""
        }
    },
    {
        "id": 72530,
        "answer": "Junior Seau",
        "question": "The family of this former Patriot linebacker allowed his brain to be studied after his untimely death in 2012",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16169,
        "category": {
            "id": 16169,
            "name": "ex-patriots"
        }
    },
    {
        "id": 76849,
        "answer": "(Richard) Wagner",
        "question": "In 1852 Dickens started publishing \"Bleak House\" &amp; he was finishing the text of The \"Ring\" Cycle",
        "value": 200,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 6471,
        "category": {
            "id": 6471,
            "name": "contemporaries"
        }
    },
    {
        "id": 76850,
        "answer": "the break",
        "question": "The shot that hits a full rack of balls to start a game",
        "value": 200,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17201,
        "category": {
            "id": 17201,
            "name": "billiards shots"
        }
    },
    {
        "id": 76851,
        "answer": "Charlie Sheen",
        "question": "On a Beverly Hills roof in 2011, he feted his firing from \"Two And A Half Men\" holding a machete &amp; saying, \"Free at last!\"",
        "value": 200,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17202,
        "category": {
            "id": 17202,
            "name": "celebs celebrating"
        }
    },
    {
        "id": 76852,
        "answer": "a snapshot",
        "question": "A Kodachrome or Polaroid",
        "value": 200,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17203,
        "category": {
            "id": 17203,
            "name": "oh, \"snap\""
        }
    },
    {
        "id": 76853,
        "answer": "Twitter",
        "question": "Jack Dorsey, a co-founder of this microblogging site, sent its first message March 21, 2006",
        "value": 200,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 16692,
        "category": {
            "id": 16692,
            "name": "potpourri"
        }
    },
    {
        "id": 76854,
        "answer": "Galileo",
        "question": "Flemish painter Pieter Bruegel the Younger was born in 1564, as was this mathematician &amp; astronomer from Pisa",
        "value": 400,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 6471,
        "category": {
            "id": 6471,
            "name": "contemporaries"
        }
    },
    {
        "id": 76855,
        "answer": "DiCaprio",
        "question": "In 2012 this \"Titanic\" superstar celebrated his 38th birthday with a party that raised $500,000 for the Red Cross",
        "value": 400,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17202,
        "category": {
            "id": 17202,
            "name": "celebs celebrating"
        }
    },
    {
        "id": 76856,
        "answer": "Minnesota",
        "question": "You had to figure there had to be a lake for this state",
        "value": 400,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17204,
        "category": {
            "id": 17204,
            "name": "close quarters"
        }
    },
    {
        "id": 76857,
        "answer": "Marie Curie",
        "question": "Amundsen reached the South Pole in December 1911, a few days after she received her second Nobel Prize",
        "value": 600,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 6471,
        "category": {
            "id": 6471,
            "name": "contemporaries"
        }
    },
    {
        "id": 76858,
        "answer": "a combination",
        "question": "To hit the cue ball into the 6 ball into the 9 ball, all on purpose, is this kind of shot that can also open a safe",
        "value": 600,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17201,
        "category": {
            "id": 17201,
            "name": "billiards shots"
        }
    },
    {
        "id": 76859,
        "answer": "Beyonce &amp; Jay-Z",
        "question": "These 2 music giants generated some controversy in 2013 by celebrating 5th wedding anniv. in Cuba",
        "value": 800,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17202,
        "category": {
            "id": 17202,
            "name": "celebs celebrating"
        }
    },
    {
        "id": 76860,
        "answer": "Frederick The Great",
        "question": "In 1741 Jonathan Edwards gave his \"Sinners In The Hands Of An Angry God\" sermon &amp; this Prussian king conquered Silesia",
        "value": 1000,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 6471,
        "category": {
            "id": 6471,
            "name": "contemporaries"
        }
    },
    {
        "id": 76861,
        "answer": "a jump shot",
        "question": "This shot where you hit the cue ball low so that it rises off the table shares its name with a basketball shot",
        "value": 1000,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17201,
        "category": {
            "id": 17201,
            "name": "billiards shots"
        }
    },
    {
        "id": 76862,
        "answer": "Hillary Swank",
        "question": "After winning an Oscar for \"Million Dollar Baby\", she headed off to a local burger joint, still in her gown",
        "value": 1000,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17202,
        "category": {
            "id": 17202,
            "name": "celebs celebrating"
        }
    },
    {
        "id": 76863,
        "answer": "red snapper",
        "question": "The flesh of this popular food fish, lutjanus campechanus, is actually white",
        "value": 1000,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17203,
        "category": {
            "id": 17203,
            "name": "oh, \"snap\""
        }
    },
    {
        "id": 76864,
        "answer": "a Copperhead",
        "question": "A Northerner who opposed the Union cause in the Civil War was called this, after a snake that strikes without warning",
        "value": 1000,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 16692,
        "category": {
            "id": 16692,
            "name": "potpourri"
        }
    },
    {
        "id": 82716,
        "answer": "Portland",
        "question": "You can see the fall colors around this largest city in Maine",
        "value": 400,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 11193,
        "category": {
            "id": 11193,
            "name": "look out below"
        }
    },
    {
        "id": 82735,
        "answer": "the Great Salt Lake",
        "question": "A railroad causeway cuts this Utah lake in half, causing red algae to grow on one side &amp; green algae on the other side",
        "value": 200,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 11193,
        "category": {
            "id": 11193,
            "name": "look out below"
        }
    },
    {
        "id": 82736,
        "answer": "Brown",
        "question": "Founded in Warren, Rhode Island, it moved to Providence in 1770",
        "value": 400,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15130,
        "category": {
            "id": 15130,
            "name": "ivy league schools"
        }
    },
    {
        "id": 82737,
        "answer": "ham hock",
        "question": "(Jimmy of the Clue Crew shows a pig diagram on the monitor.)  In the South, soups, greens, &amp; bean dishes get added flavor from this part of the pig, referred to by an alliterative name",
        "value": 400,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 1669,
        "category": {
            "id": 1669,
            "name": "american food"
        }
    },
    {
        "id": 82738,
        "answer": "Bob Marley",
        "question": "In the song \"Give It Away\", the Red Hot Chili Peppers call this reggae legend \"a poet and a prophet\"",
        "value": 400,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15132,
        "category": {
            "id": 15132,
            "name": "singers in songs"
        }
    },
    {
        "id": 82739,
        "answer": "Mount St. Helens",
        "question": "More than 30 years after it erupted in Washington State, you can see still see the blast &amp; debris zone from this volcano",
        "value": 600,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 11193,
        "category": {
            "id": 11193,
            "name": "look out below"
        }
    },
    {
        "id": 82740,
        "answer": "a po' boy",
        "question": "Benny &amp; Clovis Martin are credited with creating this New Orleans version of a hero or sub sandwich back in the 1920s",
        "value": 600,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 1669,
        "category": {
            "id": 1669,
            "name": "american food"
        }
    },
    {
        "id": 82741,
        "answer": "Manila Bay",
        "question": "On May 1, 1898 a U.S. fleet under George Dewey destroyed a Spanish fleet in this bay",
        "value": 600,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15131,
        "category": {
            "id": 15131,
            "name": "the splendid little war"
        }
    },
    {
        "id": 82742,
        "answer": "Chardonnay",
        "question": "A song by Big Sean says, \"Just to set the mood, girl I brought some Marvin Gaye\" &amp; this kind of white wine (it rhymes)",
        "value": 600,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15132,
        "category": {
            "id": 15132,
            "name": "singers in songs"
        }
    },
    {
        "id": 82743,
        "answer": "Dartmouth",
        "question": "It grew out of a single log hut in the New Hampshire wilderness",
        "value": 800,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15130,
        "category": {
            "id": 15130,
            "name": "ivy league schools"
        }
    },
    {
        "id": 82744,
        "answer": "Concord grapes",
        "question": "Juice, jellies, &amp; jams are made with this American fruit variety seen here",
        "value": 800,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 1669,
        "category": {
            "id": 1669,
            "name": "american food"
        }
    },
    {
        "id": 82745,
        "answer": "Buffalo Soldiers",
        "question": "African-American troops known as this animal type of \"soldiers\" played an important role in combat in Cuba",
        "value": 800,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15131,
        "category": {
            "id": 15131,
            "name": "the splendid little war"
        }
    },
    {
        "id": 82746,
        "answer": "Brian Wilson",
        "question": "The chorus of a song by Barenaked Ladies says, \"Lying in bed just like\" this Beach Boy \"did\"",
        "value": 800,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15132,
        "category": {
            "id": 15132,
            "name": "singers in songs"
        }
    },
    {
        "id": 82747,
        "answer": "Princeton",
        "question": "The Woodrow Wilson School of Public &amp; International Affairs is located at this university",
        "value": 1000,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15130,
        "category": {
            "id": 15130,
            "name": "ivy league schools"
        }
    },
    {
        "id": 82748,
        "answer": "an eclipse",
        "question": "A photo from the space station shows an umbral shadow across Turkey, caused by this phenomenon",
        "value": 1000,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 11193,
        "category": {
            "id": 11193,
            "name": "look out below"
        }
    },
    {
        "id": 82749,
        "answer": "Derby Pie",
        "question": "This trademarked Louisville chocolate nut dessert derives its name from being served on the first Saturday in May",
        "value": 1000,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 1669,
        "category": {
            "id": 1669,
            "name": "american food"
        }
    },
    {
        "id": 82750,
        "answer": "Gatling guns",
        "question": "Teddy Roosevelt called the sound of these early machine guns \"the only sound I ever heard my men cheer in battle\"",
        "value": 1000,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15131,
        "category": {
            "id": 15131,
            "name": "the splendid little war"
        }
    },
    {
        "id": 82751,
        "answer": "\"Moves Like Jagger\"",
        "question": "Mick gave his blessing (&amp; footage for the video) for this 2011 collaboration by Maroon 5 &amp; Christina Aguilera",
        "value": 1000,
        "airdate": "2012-03-14T12:00:00.000Z",
        "air_date": "2012-03-14",
        "category_id": 15132,
        "category": {
            "id": 15132,
            "name": "singers in songs"
        }
    },
    {
        "id": 87062,
        "answer": "Apple",
        "question": "5-letter pome fruit of the family Rosaceae",
        "value": 200,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16168,
        "category": {
            "id": 16168,
            "name": "sounds like a tech brand"
        }
    },
    {
        "id": 87063,
        "answer": "Bonnie &amp; Clyde",
        "question": "On May 21, 1934 this duo attended a party at Black Lake, Louisiana; 2 days later, they were killed by the law",
        "value": 200,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 1513,
        "category": {
            "id": 1513,
            "name": "the 1930s"
        }
    },
    {
        "id": 87064,
        "answer": "hailstone",
        "question": "On March 9, 2012 a grapefruit-sized one of these, the largest ever found in Hawaii, fell in an Oahu thunderstorm",
        "value": 200,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 525,
        "category": {
            "id": 525,
            "name": "stones"
        }
    },
    {
        "id": 87065,
        "answer": "swine",
        "question": "A bunch of pigs (5)",
        "value": 200,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 3296,
        "category": {
            "id": 3296,
            "name": "crossword clues \"s\""
        }
    },
    {
        "id": 87066,
        "answer": "the (Chicago) Bears",
        "question": "Steve Grogan quarterbacked the Pats in Super Bowl XX when Jim McMahon &amp; this team beat them by 36",
        "value": 200,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16169,
        "category": {
            "id": 16169,
            "name": "ex-patriots"
        }
    },
    {
        "id": 87067,
        "answer": "Tibet",
        "question": "Some people of this region, officially part of China, use a white triangle flag to represent its location among high mountains",
        "value": 400,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 4059,
        "category": {
            "id": 4059,
            "name": "flags of the world"
        }
    },
    {
        "id": 87068,
        "answer": "Mount Everest",
        "question": "On April 3, 1933 Lord Clydesdale became the first to pilot a plane over this mountain, just clearing it",
        "value": 400,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 1513,
        "category": {
            "id": 1513,
            "name": "the 1930s"
        }
    },
    {
        "id": 87069,
        "answer": "Stonehenge",
        "question": "The heel stone, the slaughter stone &amp; the station stones are among those found at this British landmark",
        "value": 400,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 525,
        "category": {
            "id": 525,
            "name": "stones"
        }
    },
    {
        "id": 87070,
        "answer": "sage",
        "question": "Wise herb (4)",
        "value": 400,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 3296,
        "category": {
            "id": 3296,
            "name": "crossword clues \"s\""
        }
    },
    {
        "id": 87072,
        "answer": "foot",
        "question": "Adam Vinatieri used his right one as time expired on Feb. 3, 2002 to give the Patriots their first Super Bowl victory",
        "value": 400,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16169,
        "category": {
            "id": 16169,
            "name": "ex-patriots"
        }
    },
    {
        "id": 87073,
        "answer": "Dell",
        "question": "A small wooded valley, perhaps with a farmer",
        "value": 600,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16168,
        "category": {
            "id": 16168,
            "name": "sounds like a tech brand"
        }
    },
    {
        "id": 87074,
        "answer": "(Doug) Flutie",
        "question": "This diminutive 1984 Heisman winner for Boston College played his last NFL season as a Patriot",
        "value": 600,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16169,
        "category": {
            "id": 16169,
            "name": "ex-patriots"
        }
    },
    {
        "id": 87075,
        "answer": "Commodore",
        "question": "A former U.S. Navy rank between captains &amp; admirals",
        "value": 800,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16168,
        "category": {
            "id": 16168,
            "name": "sounds like a tech brand"
        }
    },
    {
        "id": 87076,
        "answer": "Czechoslovakia",
        "question": "In March 1939, after Hitler made Bohemia &amp; Moravia a German protectorate, this country ceased to exist",
        "value": 800,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 1513,
        "category": {
            "id": 1513,
            "name": "the 1930s"
        }
    },
    {
        "id": 87077,
        "answer": "millstone",
        "question": "A heavy weight or burden around the neck, as mentioned in Luke 17",
        "value": 800,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 525,
        "category": {
            "id": 525,
            "name": "stones"
        }
    },
    {
        "id": 87078,
        "answer": "Samson",
        "question": "Biblical Hercules (6)",
        "value": 800,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 3296,
        "category": {
            "id": 3296,
            "name": "crossword clues \"s\""
        }
    },
    {
        "id": 87079,
        "answer": "Randy Moss",
        "question": "He hauled in 47 receiving touchdowns for the Pats from 2007 to 2009",
        "value": 800,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16169,
        "category": {
            "id": 16169,
            "name": "ex-patriots"
        }
    },
    {
        "id": 87080,
        "answer": "Oracle",
        "question": "A famous one in ancient Greece bathed in the Castalian Spring before speaking",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16168,
        "category": {
            "id": 16168,
            "name": "sounds like a tech brand"
        }
    },
    {
        "id": 87081,
        "answer": "Nicaragua",
        "question": "Honduras &amp; this next-door neighbor to the south &amp; east both have horizontally striped blue &amp; white flags",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 4059,
        "category": {
            "id": 4059,
            "name": "flags of the world"
        }
    },
    {
        "id": 87082,
        "answer": "Gandhi",
        "question": "After a week-long fast, he was released from government detention in Aug. 1933, weighing about 90 pounds",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 1513,
        "category": {
            "id": 1513,
            "name": "the 1930s"
        }
    },
    {
        "id": 87083,
        "answer": "curling",
        "question": "Blue Hone granite, found on the Scottish island of Ailsa Craig, is the favorite stone used in this sport",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 525,
        "category": {
            "id": 525,
            "name": "stones"
        }
    },
    {
        "id": 87084,
        "answer": "salutation",
        "question": "Dear sir or madam (10)",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 3296,
        "category": {
            "id": 3296,
            "name": "crossword clues \"s\""
        }
    },
    {
        "id": 87085,
        "answer": "Junior Seau",
        "question": "The family of this former Patriot linebacker allowed his brain to be studied after his untimely death in 2012",
        "value": 1000,
        "airdate": "2013-03-14T12:00:00.000Z",
        "air_date": "2013-03-14",
        "category_id": 16169,
        "category": {
            "id": 16169,
            "name": "ex-patriots"
        }
    },
    {
        "id": 91268,
        "answer": "a Copperhead",
        "question": "A Northerner who opposed the Union cause in the Civil War was called this, after a snake that strikes without warning",
        "value": 1000,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 16692,
        "category": {
            "id": 16692,
            "name": "potpourri"
        }
    },
    {
        "id": 91275,
        "answer": "(Richard) Wagner",
        "question": "In 1852 Dickens started publishing \"Bleak House\" &amp; he was finishing the text of The \"Ring\" Cycle",
        "value": 200,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 6471,
        "category": {
            "id": 6471,
            "name": "contemporaries"
        }
    },
    {
        "id": 91276,
        "answer": "the break",
        "question": "The shot that hits a full rack of balls to start a game",
        "value": 200,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17201,
        "category": {
            "id": 17201,
            "name": "billiards shots"
        }
    },
    {
        "id": 91277,
        "answer": "Charlie Sheen",
        "question": "On a Beverly Hills roof in 2011, he feted his firing from \"Two And A Half Men\" holding a machete &amp; saying, \"Free at last!\"",
        "value": 200,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17202,
        "category": {
            "id": 17202,
            "name": "celebs celebrating"
        }
    },
    {
        "id": 91278,
        "answer": "a snapshot",
        "question": "A Kodachrome or Polaroid",
        "value": 200,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17203,
        "category": {
            "id": 17203,
            "name": "oh, \"snap\""
        }
    },
    {
        "id": 91279,
        "answer": "Twitter",
        "question": "Jack Dorsey, a co-founder of this microblogging site, sent its first message March 21, 2006",
        "value": 200,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 16692,
        "category": {
            "id": 16692,
            "name": "potpourri"
        }
    },
    {
        "id": 91280,
        "answer": "Galileo",
        "question": "Flemish painter Pieter Bruegel the Younger was born in 1564, as was this mathematician &amp; astronomer from Pisa",
        "value": 400,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 6471,
        "category": {
            "id": 6471,
            "name": "contemporaries"
        }
    },
    {
        "id": 91281,
        "answer": "DiCaprio",
        "question": "In 2012 this \"Titanic\" superstar celebrated his 38th birthday with a party that raised $500,000 for the Red Cross",
        "value": 400,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17202,
        "category": {
            "id": 17202,
            "name": "celebs celebrating"
        }
    },
    {
        "id": 91282,
        "answer": "Minnesota",
        "question": "You had to figure there had to be a lake for this state",
        "value": 400,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17204,
        "category": {
            "id": 17204,
            "name": "close quarters"
        }
    },
    {
        "id": 91283,
        "answer": "Marie Curie",
        "question": "Amundsen reached the South Pole in December 1911, a few days after she received her second Nobel Prize",
        "value": 600,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 6471,
        "category": {
            "id": 6471,
            "name": "contemporaries"
        }
    },
    {
        "id": 91284,
        "answer": "a combination",
        "question": "To hit the cue ball into the 6 ball into the 9 ball, all on purpose, is this kind of shot that can also open a safe",
        "value": 600,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17201,
        "category": {
            "id": 17201,
            "name": "billiards shots"
        }
    },
    {
        "id": 91285,
        "answer": "Beyonce &amp; Jay-Z",
        "question": "These 2 music giants generated some controversy in 2013 by celebrating 5th wedding anniv. in Cuba",
        "value": 800,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17202,
        "category": {
            "id": 17202,
            "name": "celebs celebrating"
        }
    },
    {
        "id": 91286,
        "answer": "Frederick The Great",
        "question": "In 1741 Jonathan Edwards gave his \"Sinners In The Hands Of An Angry God\" sermon &amp; this Prussian king conquered Silesia",
        "value": 1000,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 6471,
        "category": {
            "id": 6471,
            "name": "contemporaries"
        }
    },
    {
        "id": 91287,
        "answer": "a jump shot",
        "question": "This shot where you hit the cue ball low so that it rises off the table shares its name with a basketball shot",
        "value": 1000,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17201,
        "category": {
            "id": 17201,
            "name": "billiards shots"
        }
    },
    {
        "id": 91288,
        "answer": "Hillary Swank",
        "question": "After winning an Oscar for \"Million Dollar Baby\", she headed off to a local burger joint, still in her gown",
        "value": 1000,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17202,
        "category": {
            "id": 17202,
            "name": "celebs celebrating"
        }
    },
    {
        "id": 91289,
        "answer": "red snapper",
        "question": "The flesh of this popular food fish, lutjanus campechanus, is actually white",
        "value": 1000,
        "airdate": "2014-03-14T12:00:00.000Z",
        "air_date": "2014-03-14",
        "category_id": 17203,
        "category": {
            "id": 17203,
            "name": "oh, \"snap\""
        }
    }
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
    {
        "id": 4,
        "answer": "Maine",
        "question": "Traditionally speaking, as this state goes, \"so goes the nation\"",
        "value": 200,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 1,
        "category": {
            "id": 1,
            "name": "politics"
        }
    },
    {
        "id": 5,
        "answer": "a midget",
        "question": "Eddie Gaedel, number 1\/8th, was the only one ever to play in the Major Leagues",
        "value": 200,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 2,
        "category": {
            "id": 2,
            "name": "baseball"
        }
    },
    {
        "id": 6,
        "answer": "wranglers",
        "question": "In the Old West they were in charge of horses, on a movie set in charge of chickens",
        "value": 200,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 3,
        "category": {
            "id": 3,
            "name": "odd jobs"
        }
    },
    {
        "id": 7,
        "answer": "a whistle stop",
        "question": "\"Shrill\" name for train tour electioneering",
        "value": 300,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 1,
        "category": {
            "id": 1,
            "name": "politics"
        }
    },
    {
        "id": 8,
        "answer": "Don Larsen",
        "question": "Now a paper company sales rep, he pitched only perfect game in World Series history",
        "value": 300,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 2,
        "category": {
            "id": 2,
            "name": "baseball"
        }
    },
    {
        "id": 9,
        "answer": "a bailiff",
        "question": "He solemnly swears you in, in court",
        "value": 300,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 3,
        "category": {
            "id": 3,
            "name": "odd jobs"
        }
    },
    {
        "id": 10,
        "answer": "Tasmanian devil",
        "question": "\"Satanic\" mammal found only on island S. of Australia",
        "value": 300,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 5,
        "category": {
            "id": 5,
            "name": "australia"
        }
    },
    {
        "id": 11,
        "answer": "a catalyst",
        "question": "It gets things going in a chemical reaction",
        "value": 300,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 6,
        "category": {
            "id": 6,
            "name": "\"cat\" egory"
        }
    },
    {
        "id": 12,
        "answer": "the Democrats",
        "question": "The rooster was symbol of this party before Thomas Nast drew their new one in 1870",
        "value": 400,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 1,
        "category": {
            "id": 1,
            "name": "politics"
        }
    },
    {
        "id": 13,
        "answer": "cartoonists (or animators)",
        "question": "Ub Iwerks, Friz Freleng &amp; Tex Avery drew the line at this job",
        "value": 400,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 3,
        "category": {
            "id": 3,
            "name": "odd jobs"
        }
    },
    {
        "id": 14,
        "answer": "Maggie the Cat",
        "question": "Elizabeth Taylor character that could have burnt her paws on a hot tin roof",
        "value": 400,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 6,
        "category": {
            "id": 6,
            "name": "\"cat\" egory"
        }
    },
    {
        "id": 15,
        "answer": "a CAT scan",
        "question": "During one in a hospital, your brain should think \"cheese\"",
        "value": 500,
        "airdate": "1985-02-08T12:00:00.000Z",
        "air_date": "1985-02-08",
        "category_id": 6,
        "category": {
            "id": 6,
            "name": "\"cat\" egory"
        }
    },
    {
        "id": 16,
        "answer": "Anchorage",
        "question": "Alaskan city renamed this because ships docked there",
        "value": 100,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 7,
        "category": {
            "id": 7,
            "name": "u.s. cities"
        }
    },
    {
        "id": 17,
        "answer": "quartz",
        "question": "Watch named for the vibrating crystal that runs it",
        "value": 100,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 8,
        "category": {
            "id": 8,
            "name": "time"
        }
    },
    {
        "id": 18,
        "answer": "maitre d'",
        "question": "Shortened from French meaning \"master of hotel\", he greets you &amp; seats you",
        "value": 100,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 9,
        "category": {
            "id": 9,
            "name": "dining out"
        }
    },
    {
        "id": 19,
        "answer": "alphabetic",
        "question": "The order of works in a dictionary",
        "value": 100,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 11,
        "category": {
            "id": 11,
            "name": "trivia"
        }
    },
    {
        "id": 20,
        "answer": "Pueblo",
        "question": "Colorado city whose name means \"town\" in Spanish",
        "value": 200,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 7,
        "category": {
            "id": 7,
            "name": "u.s. cities"
        }
    },
    {
        "id": 21,
        "answer": "March",
        "question": "It \"comes in like a lion &amp; goes out like a lamb\"",
        "value": 200,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 8,
        "category": {
            "id": 8,
            "name": "time"
        }
    },
    {
        "id": 22,
        "answer": "busboys",
        "question": "If employed by Greyhound their motto might be \"Leave the clearing to us\"",
        "value": 200,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 9,
        "category": {
            "id": 9,
            "name": "dining out"
        }
    },
    {
        "id": 23,
        "answer": "donkey",
        "question": "Party symbol 1st used by Andrew Jackson after opponents called him a jackass",
        "value": 200,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 11,
        "category": {
            "id": 11,
            "name": "trivia"
        }
    },
    {
        "id": 24,
        "answer": "Buffalo",
        "question": "The city of Niagara Falls is its largest suburb",
        "value": 300,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 7,
        "category": {
            "id": 7,
            "name": "u.s. cities"
        }
    },
    {
        "id": 25,
        "answer": "4",
        "question": "Number of months with exactly 30 days",
        "value": 300,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 8,
        "category": {
            "id": 8,
            "name": "time"
        }
    },
    {
        "id": 26,
        "answer": "Sunday",
        "question": "Lucky children born that day are \"fair &amp; wise &amp; good &amp; gay\"",
        "value": 400,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 8,
        "category": {
            "id": 8,
            "name": "time"
        }
    },
    {
        "id": 27,
        "answer": "wine steward",
        "question": "As sommelier, he hopes to ply you with the finest vintage",
        "value": 400,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 9,
        "category": {
            "id": 9,
            "name": "dining out"
        }
    },
    {
        "id": 28,
        "answer": "Alexander Calder",
        "question": "American sculptor known for his playful metal mobiles",
        "value": 400,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 12,
        "category": {
            "id": 12,
            "name": "\"ac\"\/\"dc\""
        }
    },
    {
        "id": 29,
        "answer": "week",
        "question": "Repeating group of days whose name means \"a turning\" in Old Norse",
        "value": 500,
        "airdate": "1984-12-14T12:00:00.000Z",
        "air_date": "1984-12-14",
        "category_id": 8,
        "category": {
            "id": 8,
            "name": "time"
        }
    },
    {
        "id": 30,
        "answer": "Rome",
        "question": "Where all roads were supposed to have led",
        "value": 100,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 14,
        "category": {
            "id": 14,
            "name": "ancient worlds"
        }
    },
    {
        "id": 31,
        "answer": "Henry Fonda",
        "question": "Brando was 2 when his mom appeared on stage with this dad of Peter &amp; Jane",
        "value": 100,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 15,
        "category": {
            "id": 15,
            "name": "hollywood legends"
        }
    },
    {
        "id": 32,
        "answer": "New York",
        "question": "The Empire State",
        "value": 100,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 17,
        "category": {
            "id": 17,
            "name": "u.s. states"
        }
    },
    {
        "id": 33,
        "answer": "hard cider",
        "question": "Fermented apple juice",
        "value": 100,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 18,
        "category": {
            "id": 18,
            "name": "\"hard\""
        }
    },
    {
        "id": 34,
        "answer": "a bicycle",
        "question": "Early ones were called the \"hobby horse\", \"penny-farthing\" &amp; \"high-wheeler\"",
        "value": 200,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 13,
        "category": {
            "id": 13,
            "name": "inventions"
        }
    },
    {
        "id": 35,
        "answer": "Egypt",
        "question": "Its people called it \"kemet\", color of black, from land after flooding by Nile",
        "value": 200,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 14,
        "category": {
            "id": 14,
            "name": "ancient worlds"
        }
    },
    {
        "id": 36,
        "answer": "Edith Head",
        "question": "She won 8 Academy Awards with only her clothes appearing on screen",
        "value": 200,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 15,
        "category": {
            "id": 15,
            "name": "hollywood legends"
        }
    },
    {
        "id": 37,
        "answer": "Pontiac",
        "question": "GM car named for Indian chief who tried to take Ft. Detroit",
        "value": 200,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 16,
        "category": {
            "id": 16,
            "name": "cars"
        }
    },
    {
        "id": 38,
        "answer": "Texas",
        "question": "The ceiling of its capitol features a lone star",
        "value": 200,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 17,
        "category": {
            "id": 17,
            "name": "u.s. states"
        }
    },
    {
        "id": 39,
        "answer": "hard-boiled",
        "question": "Descriptive of Mike Hammer, Private Eye, or a 20-minute egg",
        "value": 200,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 18,
        "category": {
            "id": 18,
            "name": "\"hard\""
        }
    },
    {
        "id": 40,
        "answer": "a paper clip",
        "question": "1899 device for attaching papers that can ruin a computer disc when magnetized",
        "value": 300,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 13,
        "category": {
            "id": 13,
            "name": "inventions"
        }
    },
    {
        "id": 41,
        "answer": "the Bronze Age",
        "question": "Followed the Stone Age; named for copper alloy people used for tools &amp; weapons",
        "value": 300,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 14,
        "category": {
            "id": 14,
            "name": "ancient worlds"
        }
    },
    {
        "id": 42,
        "answer": "Bavarian Motor Works",
        "question": "What BMW stands for",
        "value": 300,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 16,
        "category": {
            "id": 16,
            "name": "cars"
        }
    },
    {
        "id": 43,
        "answer": "Arizona",
        "question": "Only U.S. state with a \"Z\" in its name",
        "value": 300,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 17,
        "category": {
            "id": 17,
            "name": "u.s. states"
        }
    },
    {
        "id": 44,
        "answer": "hard of hearing",
        "question": "Reason people used to stick a trumpet in their ear",
        "value": 300,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 18,
        "category": {
            "id": 18,
            "name": "\"hard\""
        }
    },
    {
        "id": 45,
        "answer": "Archimedes",
        "question": "After inventing the lever &amp; pulley, this Greek said, \"I will move the Earth\"",
        "value": 400,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 13,
        "category": {
            "id": 13,
            "name": "inventions"
        }
    },
    {
        "id": 46,
        "answer": "painting",
        "question": "The Chinese once regarded calligraphy as a branch of this art",
        "value": 400,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 14,
        "category": {
            "id": 14,
            "name": "ancient worlds"
        }
    },
    {
        "id": 47,
        "answer": "Elizabeth Taylor",
        "question": "In her 1st film she sang with \"Alfalfa\" Switzer; in her next, she was paired with Lassie",
        "value": 400,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 15,
        "category": {
            "id": 15,
            "name": "hollywood legends"
        }
    },
    {
        "id": 48,
        "answer": "Vermont",
        "question": "The New England state without an Atlantic Ocean coastline",
        "value": 400,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 17,
        "category": {
            "id": 17,
            "name": "u.s. states"
        }
    },
    {
        "id": 49,
        "answer": "Hardcastle",
        "question": "TV role Brian Keith judged OK to play",
        "value": 400,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 18,
        "category": {
            "id": 18,
            "name": "\"hard\""
        }
    },
    {
        "id": 50,
        "answer": "a submarine",
        "question": "1st one to attempt sinking a warship was the \"Turtle\" in the Revolutionary War",
        "value": 500,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 13,
        "category": {
            "id": 13,
            "name": "inventions"
        }
    },
    {
        "id": 51,
        "answer": "the Phoenicians",
        "question": "Civilization of sailors that developed 1st Western alphabet",
        "value": 500,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 14,
        "category": {
            "id": 14,
            "name": "ancient worlds"
        }
    },
    {
        "id": 52,
        "answer": "South Carolina",
        "question": "8th state of the Union, it was the 1st state to secede",
        "value": 500,
        "airdate": "1984-12-12T12:00:00.000Z",
        "air_date": "1984-12-12",
        "category_id": 17,
        "category": {
            "id": 17,
            "name": "u.s. states"
        }
    },
    {
        "id": 53,
        "answer": "Richard Pryor",
        "question": "Comic whose \"Trial by Fire\" fueled his comedy routines",
        "value": 100,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 20,
        "category": {
            "id": 20,
            "name": "comedians"
        }
    },
    {
        "id": 54,
        "answer": "a fox",
        "question": "\"Sly\" creature sought by sportsmen riding to hounds",
        "value": 100,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 21,
        "category": {
            "id": 21,
            "name": "animals"
        }
    },
    {
        "id": 55,
        "answer": "Victoria Cross",
        "question": "British decoration named for former queen",
        "value": 100,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 23,
        "category": {
            "id": 23,
            "name": "awards"
        }
    },
    {
        "id": 56,
        "answer": "the Sphinx",
        "question": "De\"faced\" by sand &amp; invading armies, it crouches near the Great Pyramids",
        "value": 200,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 19,
        "category": {
            "id": 19,
            "name": "landmarks"
        }
    },
    {
        "id": 57,
        "answer": "Jack Benny",
        "question": "Master of the pause followed by \"Now cut that out!\"",
        "value": 200,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 20,
        "category": {
            "id": 20,
            "name": "comedians"
        }
    },
    {
        "id": 58,
        "answer": "a camel",
        "question": "The \"ship of the desert\"",
        "value": 200,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 21,
        "category": {
            "id": 21,
            "name": "animals"
        }
    },
    {
        "id": 59,
        "answer": "&lt;i&gt;Dr. Strangelove&lt;\/i&gt;",
        "question": "Subtitled \"How I Learned to Stop Worrying &amp; Love the Bomb\"",
        "value": 200,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 24,
        "category": {
            "id": 24,
            "name": "movie trivia"
        }
    },
    {
        "id": 60,
        "answer": "the Smothers Brothers",
        "question": "Pat Paulsen ran for president on their controversial \"Comedy Hour\"",
        "value": 300,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 20,
        "category": {
            "id": 20,
            "name": "comedians"
        }
    },
    {
        "id": 61,
        "answer": "turkeys",
        "question": "The children are poults, the mothers, hens &amp; the fathers,toms",
        "value": 300,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 21,
        "category": {
            "id": 21,
            "name": "animals"
        }
    },
    {
        "id": 62,
        "answer": "falconry",
        "question": "Name of the sport of hunting birds with other birds",
        "value": 400,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 21,
        "category": {
            "id": 21,
            "name": "animals"
        }
    },
    {
        "id": 63,
        "answer": "George Bernard Shaw",
        "question": "26 years after writing it for the stage, he won Oscar for the screenplay \"Pygmalion\"",
        "value": 400,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 23,
        "category": {
            "id": 23,
            "name": "awards"
        }
    },
    {
        "id": 64,
        "answer": "Vienna",
        "question": "City Wiener Schnitzel is named for",
        "value": 400,
        "airdate": "1984-12-05T12:00:00.000Z",
        "air_date": "1984-12-05",
        "category_id": 43,
        "category": {
            "id": 43,
            "name": "foreign cuisine"
        }
    },
    {
        "id": 65,
        "answer": "July 4, 1776",
        "question": "The date on the tablet held by the Statue of Liberty",
        "value": 500,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 19,
        "category": {
            "id": 19,
            "name": "landmarks"
        }
    },
    {
        "id": 66,
        "answer": "Bill Cosby",
        "question": "Though originally a comic, he was 1st black regular on a U.S. dramatic TV series",
        "value": 500,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 20,
        "category": {
            "id": 20,
            "name": "comedians"
        }
    },
    {
        "id": 67,
        "answer": "the Portuguese man-of-war",
        "question": "Floating sea creature named by sailors for the Iberian fighting ship it resembles",
        "value": 500,
        "airdate": "1984-12-11T12:00:00.000Z",
        "air_date": "1984-12-11",
        "category_id": 21,
        "category": {
            "id": 21,
            "name": "animals"
        }
    },
    {
        "id": 68,
        "answer": "6",
        "question": "A typical snowflake has this many sides",
        "value": 100,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 25,
        "category": {
            "id": 25,
            "name": "science"
        }
    },
    {
        "id": 69,
        "answer": "Abraham Lincoln",
        "question": "Though Detective Pinkerton saved him once, he later became 1st assassinated president",
        "value": 100,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 28,
        "category": {
            "id": 28,
            "name": "presidential firsts"
        }
    },
    {
        "id": 70,
        "answer": "Andy Panda",
        "question": "The black &amp; white bear of Walter Lantz cartoons",
        "value": 100,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 29,
        "category": {
            "id": 29,
            "name": "\"andy\""
        }
    },
    {
        "id": 71,
        "answer": "iron",
        "question": "Common element whose refined forms include pig, cast or wrought",
        "value": 200,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 25,
        "category": {
            "id": 25,
            "name": "science"
        }
    },
    {
        "id": 72,
        "answer": "a brassiere",
        "question": "Howard Hughes designed a cantilevered one for voluptuous Jane Russell",
        "value": 200,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 26,
        "category": {
            "id": 26,
            "name": "fashion"
        }
    },
    {
        "id": 73,
        "answer": "John Adams",
        "question": "Second U.S. president, he was the 1st defeated for re-election",
        "value": 200,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 28,
        "category": {
            "id": 28,
            "name": "presidential firsts"
        }
    },
    {
        "id": 74,
        "answer": "the Andy Hardy series",
        "question": "\"A Family Affair\" was the 1st of 15 films in this Mickey Rooney series",
        "value": 200,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 29,
        "category": {
            "id": 29,
            "name": "\"andy\""
        }
    },
    {
        "id": 75,
        "answer": "time",
        "question": "After length, width &amp; depth, the 4th dimension",
        "value": 300,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 25,
        "category": {
            "id": 25,
            "name": "science"
        }
    },
    {
        "id": 76,
        "answer": "a pea jacket",
        "question": "\"Edible\" name for a double-breasted wool navy jacket",
        "value": 300,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 26,
        "category": {
            "id": 26,
            "name": "fashion"
        }
    },
    {
        "id": 77,
        "answer": "George Washington",
        "question": "1st president to refuse a 3rd term",
        "value": 300,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 28,
        "category": {
            "id": 28,
            "name": "presidential firsts"
        }
    },
    {
        "id": 78,
        "answer": "\"Maniac\"",
        "question": "\"Flashdance\" song whose lyrics were changed to make a mad killer a mad dancer",
        "value": 300,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 4,
        "category": {
            "id": 4,
            "name": "movies"
        }
    },
    {
        "id": 79,
        "answer": "a parasite",
        "question": "Type of organism that lives off of another, contributing nothing",
        "value": 400,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 25,
        "category": {
            "id": 25,
            "name": "science"
        }
    },
    {
        "id": 80,
        "answer": "&lt;i&gt;The Andy Williams Show&lt;\/i&gt;",
        "question": "Donny Osmond made his debut at the age of 4 on his show",
        "value": 400,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 29,
        "category": {
            "id": 29,
            "name": "\"andy\""
        }
    },
    {
        "id": 81,
        "answer": "a sonic boom",
        "question": "Shattering sound that accompanies breaking the sound barrier",
        "value": 500,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 25,
        "category": {
            "id": 25,
            "name": "science"
        }
    },
    {
        "id": 82,
        "answer": "a sackcloth",
        "question": "Penitents once wore this rough cloth with ashes",
        "value": 500,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 26,
        "category": {
            "id": 26,
            "name": "fashion"
        }
    },
    {
        "id": 83,
        "answer": "Christopher Lloyd",
        "question": "\"Taxi\" reverend who played bad guys in \"Star Trek III\" &amp; \"Buckaroo Banzai\"",
        "value": 500,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 4,
        "category": {
            "id": 4,
            "name": "movies"
        }
    },
    {
        "id": 84,
        "answer": "Andy Warhol",
        "question": "An 8-hour static film of the Empire State Building was done by this pop artist",
        "value": 500,
        "airdate": "1984-12-10T12:00:00.000Z",
        "air_date": "1984-12-10",
        "category_id": 29,
        "category": {
            "id": 29,
            "name": "\"andy\""
        }
    },
    {
        "id": 85,
        "answer": "Exodus",
        "question": "The 2nd book of the Old Testament",
        "value": 100,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 31,
        "category": {
            "id": 31,
            "name": "the bible"
        }
    },
    {
        "id": 86,
        "answer": "Nerf (or foam rubber)",
        "question": "Parker Bros, has made balls, boomerangs &amp; ping pong paddles out of this soft material",
        "value": 100,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 32,
        "category": {
            "id": 32,
            "name": "toys &amp; games"
        }
    },
    {
        "id": 87,
        "answer": "water skiing",
        "question": "Cypress Gardens show done on water, not on snow",
        "value": 100,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 33,
        "category": {
            "id": 33,
            "name": "water sports"
        }
    },
    {
        "id": 88,
        "answer": "the trumpet",
        "question": "What \"Satchmo\" played",
        "value": 100,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 34,
        "category": {
            "id": 34,
            "name": "all that jazz"
        }
    },
    {
        "id": 89,
        "answer": "Michigan",
        "question": "The Wolverine State, in 1847 became 1st to abolish capital punishment",
        "value": 200,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 17,
        "category": {
            "id": 17,
            "name": "u.s. states"
        }
    },
    {
        "id": 90,
        "answer": "the golden calf",
        "question": "Image of worship built of old jewelry while Moses was on the mountain",
        "value": 200,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 31,
        "category": {
            "id": 31,
            "name": "the bible"
        }
    },
    {
        "id": 91,
        "answer": "rock (or a stone)",
        "question": "As scissors beats paper, so paper beats this",
        "value": 200,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 32,
        "category": {
            "id": 32,
            "name": "toys &amp; games"
        }
    },
    {
        "id": 92,
        "answer": "trolling",
        "question": "Fishing from a moving boat",
        "value": 200,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 33,
        "category": {
            "id": 33,
            "name": "water sports"
        }
    },
    {
        "id": 93,
        "answer": "Oklahoma",
        "question": "Region originally called Indian Territory, it now has no Fed. reservations",
        "value": 300,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 17,
        "category": {
            "id": 17,
            "name": "u.s. states"
        }
    },
    {
        "id": 94,
        "answer": "bequeath",
        "question": "To give by will",
        "value": 300,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 30,
        "category": {
            "id": 30,
            "name": "starts with \"b\""
        }
    },
    {
        "id": 95,
        "answer": "12",
        "question": "Total number of dots on the highest standard domino",
        "value": 300,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 32,
        "category": {
            "id": 32,
            "name": "toys &amp; games"
        }
    },
    {
        "id": 96,
        "answer": "Arkansas",
        "question": "Western neighbor of Tenn. &amp; Miss.; it has only diamond field in N. America",
        "value": 400,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 17,
        "category": {
            "id": 17,
            "name": "u.s. states"
        }
    },
    {
        "id": 97,
        "answer": "Silly Putty",
        "question": "Thrown out by G.E. in 1949, this stretchy stuff became a national fad",
        "value": 400,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 32,
        "category": {
            "id": 32,
            "name": "toys &amp; games"
        }
    },
    {
        "id": 98,
        "answer": "Nebraska",
        "question": "Midwest state whose native sons include Marlon Brando, Nick Nolte &amp; Henry Fonda",
        "value": 500,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 17,
        "category": {
            "id": 17,
            "name": "u.s. states"
        }
    },
    {
        "id": 99,
        "answer": "Botany Bay",
        "question": "Australian bay named for the many plants growing on its shores",
        "value": 500,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 30,
        "category": {
            "id": 30,
            "name": "starts with \"b\""
        }
    },
    {
        "id": 100,
        "answer": "a yo-yo",
        "question": "Said to be a be a weapon in the Philippines, Duncan made them toys for the U.S.",
        "value": 500,
        "airdate": "1984-12-07T12:00:00.000Z",
        "air_date": "1984-12-07",
        "category_id": 32,
        "category": {
            "id": 32,
            "name": "toys &amp; games"
        }
    }
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
