# Cursus gegevens
Specifieke cursus informatie (werkt ook voor cursussen die niet meer actief zijn).

## Request
```http
GET /{reseller}/courses/{course}
```
```http
GET https://test.theorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/courses/01GYFBWMYGGARXBN40X7FFDCNZ
```

### Parameters
* `reseller` - `string` - ULID or KvK of <dfn>reseller</dfn>
* `course` - `string` - ULID of <dfn>course</dfn>

## Response
### `200` OK

#### Schema
#### Example
```json
{
    "id": "01GYFBWMYGGARXBN40X7FFDCNZ",
    "license": "B",
    "locale": "NL",
    "title": "Theoriecursus personenauto",
    "description": "Online theorie leren voor het CBR theorie-examen auto, motor, scooter, snorfiets, bromfiets, speed-pedelec of brommobiel.",
    "image": "https://test.itheorie.nl/images/course/fallback.jpg",
    "publishedAt": "2023-04-20T14:58:06+02:00",
    "updatedAt": "2023-08-29T16:54:01+02:00",
    "chapters": [ "Wetgeving", "Voertuigkennis", ... ],
    "exams": [ "Examen 1", "Examen 2", ... ],
    "theoryLessons": [ "Wetgeving", "Voertuigkennis", ... ],
}
```

### `401` Unauthorized
### `403` Forbidden
### `404` Not Found
