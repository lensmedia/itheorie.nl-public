# Beknopte informatie over een student (progressie).

## Request
```http
GET /{reseller}/students/{accessCode}
```

### Parameters
* `reseller` - `string` - ULID or KvK of <dfn>reseller</dfn>
* `accessCode` - `string` - ULID of toegangscode (16 hexadecimale tekens)

## Response

### `200` OK
#### Schema

#### Voorbeeld
```json
{
    "id": "01GYFBXGA6C3BZD16WNK6FPQ4P",
    "accessCode": "128b82eecaf9decc",
    "expiresAt": "2033-03-01T00:00:00+01:00",
    "activatedAt": "2023-04-20T14:58:34+02:00",
    "lastSeenAt": "2023-08-29T18:19:03+02:00",
    "course": {
        "id": "01GYFBWMYGGARXBN40X7FFDCNZ",
        "license": "B",
        "locale": "NL",
        "title": "Theoriecursus personenauto",
        "description": "Online theorie leren voor het CBR theorie-examen auto, motor, scooter, snorfiets, bromfiets, speed-pedelec of brommobiel.",
        "image": "https://test.itheorie.nl/images/course/fallback.jpg",
        "publishedAt": "2023-04-20T14:58:06+02:00",
        "updatedAt": "2023-08-29T18:23:55+02:00"
    },
    "courseCompletedAt": "2023-04-20T14:58:35+02:00",
    "refresherCourseActivatedAt": null,
    "blockedAt": null,
    "blockedReason": null,
    "progression": {
        "chapters": {
            "total": 9,
            "completed": 9,
            "progress": "1"
        },
        "exams": {
            "total": 50,
            "completed": 10,
            "progress": "0.2"
        },
        "theoryLessons": {
            "total": 9,
            "attended": 9,
            "reservations": 9,
            "progress": "1"
        }
    }
}
```

### `403` Forbidden
### `404` Not Found
