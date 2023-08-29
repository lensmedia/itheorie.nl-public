# Lijst met beschikbare cursussen
Lijst met alle cursussen die **op dit moment beschikbaar zijn** in iTheorie. **Let op:** het kan wezen dat een cursist een oudere cursus volgt die hier niet meer tussen staat!

B.v. de cursussen motor en bromfiets zijn veranderd naar een nieuwe indeling sinds we de nieuwe iTheorie hebben. Cursisten die hiervoor al bezig waren hebben nog de oude cursussen die **niet in deze lijst staat**.

Zoek je gegevens van een cursus die niet meer actief is dan kan je de specifieke cursus opvragen met [:link: `GET /courses/{course}`](get-courses-course.md). Deze end-point
werkt met alle cursussen die wij in ons systeem hebben, actief of niet.

## Request
```http
GET /{reseller}/courses
```
```http
GET https://test.theorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/courses
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>

## Response
### `200` OK

#### Schema
#### Example
```json
[{
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
    "offer": {
        "originalPrice": {
            "amount": "16.80",
            "currency": "EUR"
        },
        "currentPrice": {
            "amount": "16.45",
            "currency": "EUR"
        },
        "currentPriceDetails": "Korting voorbeeld",
        "vat": "0.21",
        "suggestedRetailPrice": {
            "amount": "49.00",
            "currency": "EUR"
        }
    }
}, ...]
```

### `401` Unauthorized
### `403` Forbidden
### `404` Not Found
