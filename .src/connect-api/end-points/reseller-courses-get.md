# List of available courses
List with all courses that are **currently available** in iTheorie. 

> **info** It is possible that a student is following an older course that is **not in this list**!
>
> E.g. the motorcycle and moped courses have been changed to a new format since the release of iTheorie. Students who were already working on this still have the old courses that are **not in this list**.
>
> If you are looking for data from a course that is no longer active, you can request the specific course with [:link: `GET /{reseller}/courses/{course}`](reseller-courses-course-get.md). This end-point
works with all courses that we have in our system, active or not.

## Request
```http
GET /{reseller}/courses
```
```http
GET https://test.theorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/courses
```

### Parameters
* {INCLUDE:../includes/reseller-parameter.md}

#### Query Parameters
{INCLUDE:../includes/pagination-parameters.md}

## Response
### Schema
{INCLUDE:../includes/schemas/pagination.md}
| `data` | `CourseData[]` | List with all purchases made by the reseller. |

#### CourseData
{INCLUDE:../includes/schemas/course-data-offer.md}

#### OfferData
{INCLUDE:../includes/schemas/offer-data.md}

#### Money
{INCLUDE:../includes/schemas/money.md}

### Example
```json
{
    "links": {
        "first": "https://test.itheorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/courses?page=1",
        "self": "https://test.itheorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/courses?page=1",
        "last": "https://test.itheorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/courses?page=1"
    },
    "data": [
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
        }
    ]
}
```

### Errors

#### {INCLUDE:../includes/reseller-attribute-title.md}
{INCLUDE:../includes/reseller-errors.md}
