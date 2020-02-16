# Trivia API Documentation - Connor Smyth

### Sample
```
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
```

## API Usage
### /question
- URL: `/api/question`
- Default: the default return is a random question
- Options
    - `id`(int): the question with the specified id
    - `value`(int): a random question fo the specified value
    - `category`(string): a random question from the specified category
