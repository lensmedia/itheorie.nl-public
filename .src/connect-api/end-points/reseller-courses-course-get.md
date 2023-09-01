# Cursus gegevens
Specific course information (also works for courses that are no longer active).

_**info** active courses are courses that can be purchased right now. It is
also possible that students follow older courses that have been unlisted._

## Request
```http
GET /{reseller}/courses/{course}
```

### Parameters
* {INCLUDE:../includes/reseller-parameter.md}
* `course` - `string` - ULID of the <dfn>course</dfn>

## Response
#### Schema
As these also include courses that are no longer active, there is no `OfferData` included. Use the courses list to get the active courses and their prices.

{INCLUDE:../includes/schemas/course-data.md}

#### Example
```json
{
    "id": "01GYFBWMYGGARXBN40X7FFDCNZ",
    "license": "B",
    "locale": "NL",
    "title": "Theoriecursus personenauto",
    "description": "Online theorie leren voor het CBR theorie-examen auto, motor, scooter, snorfiets, bromfiets, speed-pedelec of brommobiel.",
    "image": "https://test.itheorie.nl/assets/images/course/fallback.jpg",
    "publishedAt": "2023-04-20T14:58:06+02:00",
    "updatedAt": "2023-08-29T16:54:01+02:00",
    "chapters": [ "Wetgeving", "Voertuigkennis", ... ],
    "exams": [ "Examen 1", "Examen 2", ... ],
    "theoryLessons": [ "Wetgeving", "Voertuigkennis", ... ],
}
```

### Errors

#### {INCLUDE:../includes/reseller-parameter-title.md}
{INCLUDE:../includes/reseller-parameter-errors.md}

#### Course parameter
* {ERROR:course_not_found}
