# Trivia API

## Online Documentation
[https://trivia.connorsmyth.com/api](https://trivia.connorsmyth.com/api)

## About

### 96,221 QUESTIONS

I started creating this trivia API when I decided to create a trivia slack app. At first I was leveraging a different API that contained only user submitted questions. The issue I found with it was it had only the option for true or false questions or multiple choice. I wanted something that was more of along the lines of single question and single answer. I didn't want the question not to work without the other multiple choice options.

I began looking around for a different trivia api and came across [jService.io](http://jservice.io/), a ruby based trivia API with 156,800 questions built by scraping jArchive. After poking around a little I discovered that it was being hosted on a simple heroku server with many outdated Ruby dependencies. I attempted to replicate the Ruby environment on my local machine and a simple Linode server with no success, even with rvm. I noticed the developer hasn't had much of an online presence in the last 5 years so after attempting to reach out with and receiving no response I decided to create my own trivia API.

Upon noticing that jService kept track of questions marked as invalid and also had many questions with empty questions or answers fields. I built a quick PHP script and began scraping away. I then created another PHP script after evaluating the state of the database and cleaned up the invalid questions and sent it to a developer/mentor friend who was curious, [Jordana Harrison](http://jordanaharrison.com/). They helped me do some further cleaning and created a new table that handled the relationships between the category names and the category IDs.

Then I started to create the API with Laravel. I am a big fan of the open source movement so I didn't want to bog people down with having to use API keys, similar to the way jService works. The API is free and open to the public.

## Install the Project
```shell script
$ git clone https://github.com/ActuallyConnor/Trivious.git
$ cd Trivious
$ composer install
$ npm install
$ php artisan serve
```
Then go to [http://127.0.0.1:8000](http://127.0.0.1:8000)*

_*Optionally, if you are using Valet you can go to [http://trivious.test](http://trivious.test)_

## API Usage

### /QUESTION
URL: /api/question

Default: the default return is a random question

Options:
- id(int): the question with the specified id
- value(int): a random question of the specified value
- category(string): a random question from the specified category
- airdate(string): a random question from the specified air date
- year(int): a random question from the specified year
- month(int): a random question from the specified month
- day(int): a random question from the specified day

Example: https://trivia.connorsmyth.com/api/question/?id=6

Example: https://trivia.connorsmyth.com/api/question/?value=200&category=music

### /QUESTIONS
URL: /api/questions

Default: the default return is a group of 100 questions starting with an id of 1 and ending with an id of 100

Options:
- value(int): all questions of the specified value
- category(string): all questions from the specified category
- airdate(string): all questions from the specified air date
- year(int): all questions from the specified year
- month(int): all questions from the specified month
- day(int): all questions from the specified day
- offset(int): all questions starting from a specified offset number
- quantity(int): limit the number of questions that can be returned

Example: https://trivia.connorsmyth.com/api/questions/?value=200&category=sports

### /QUESTION/TODAY
URL: /api/question/today


Default: the default return is a random question that aired on today's date from any year

Options:
- value(int): a random question from today's date of the specified value
- category(string): a random question from today's date from the specified category

### /QUESTIONS/TODAY
URL: /api/questions/today

Default: the default all questions that aired on today's date from any year

Options:
- value(int): all questions from today's date of the specified value
- category(string): all questions from today's date from the specified category
