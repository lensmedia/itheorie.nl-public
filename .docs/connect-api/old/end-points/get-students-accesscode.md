# Beknopte informatie over een student (progressie).
## Request
```http
GET /students/{accessCode}
```

### Parameters
* `accessCode` - `string` - ULID of toegangscode (16 hexadecimale tekens)

## Response

### `200` OK
#### Schema
| veld                                        | beschrijving                                                                                                                                                                                                                                                                         |
|---------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `@course: string`                           | API url naar de cursus                                                                                                                                                                                                                                                               |
| `id: string`                                | Unieke identifier van de toegangscode (ULID)                                                                                                                                                                                                                                         |
| `accessCode: string`                        | Toegangscode (16 hexadecimale tekens)                                                                                                                                                                                                                                                |
| `expiresAt: datetime`                       | Datum waarop de toegangscode verloopt                                                                                                                                                                                                                                                |
| `activatedAt: datetime`                     | Datum waarop de toegangscode is geactiveerd                                                                                                                                                                                                                                          |
| `lastSeenAt: datetime`                      | Datum waarop de toegangscode voor het laatst is gebruikt                                                                                                                                                                                                                             |
| `course: string`                            | Titel van de cursus                                                                                                                                                                                                                                                                  |
| `courseCompletedAt: datetime`               | Datum waarop het theorie gedeelte voor het eerst is afgerond                                                                                                                                                                                                                         |
| `refresherCourseActivatedAt: datetime`      | Datum waarop de herhalingscursus is geactiveerd                                                                                                                                                                                                                                      |
| `blockedAt: null\|datetime`                 | Datum waarop de toegangscode is geblokkeerd                                                                                                                                                                                                                                          |
| `blockedReason?: string`                    | Reden waarom de toegangscode is geblokkeerd (alleen als `blockedAt` een waarde heeft)                                                                                                                                                                                                |
| `progression: object`                       | Voortgang van de student                                                                                                                                                                                                                                                             |
| `progression.chapters: object`              | Voortgang van de hoofdstukken                                                                                                                                                                                                                                                        |
| `progression.chapters.total: int`           | Totaal aantal hoofdstukken                                                                                                                                                                                                                                                           |
| `progression.chapters.completed: int`       | Aantal afgeronde hoofdstukken                                                                                                                                                                                                                                                        |
| `progression.chapters.progress: float`      | Percentage afgeronde hoofdstukken (deze kan afwijken van wat je verwacht omdat deze berekend word aan de hand van de verwachte tijd die nodig is om een hoofdstuk af te ronden en wat al afgerond is en niet simpel `hoofdstukken/totaal` aangezien niet elk hoofdstuk even lang is) |
| `progression.exams: object`                 | Voortgang van de examens                                                                                                                                                                                                                                                             |
| `progression.exams.total: int`              | Totaal aantal examens                                                                                                                                                                                                                                                                |
| `progression.exams.completed: int`          | Aantal afgeronde examens (zelfde verhaal als bij `progression.chapters.progress`, echter momenteel hebben alle examens de zelfde verwachtingstijd)                                                                                                                                   |
| `progression.exams.progress: float`         | Percentage afgeronde examens                                                                                                                                                                                                                                                         |
| `progression.theoryLessons: object`         | Voortgang van de theorie lessen                                                                                                                                                                                                                                                      |
| `progression.theoryLessons.total: int`      | Totaal aantal theorie lessen                                                                                                                                                                                                                                                         |
| `progression.theoryLessons.completed: int`  | Aantal afgeronde theorie lessen                                                                                                                                                                                                                                                      |
| `progression.theoryLessons.progress: float` | Percentage afgeronde theorie lessen                                                                                                                                                                                                                                                  |

#### Voorbeeld
```json
{
    "@course": "/courses/04GC7ABB22TT7Y6883YPVHFCG5.json",
    "id": "01GC7ABB22TT7Y6883YPVHFCG5",
    "accessCode": "0A1B2C3456D7E8F9",
    "expiresAt": "2020-01-01T00:00:00Z",
    "course": "Theoriecursus personenauto",
    "activatedAt":  "2020-01-01T00:00:00Z",
    "lastSeenAt": "2020-01-01T00:00:00Z",
    "courseCompletedAt":  "2020-01-01T00:00:00Z",
    "refresherCourseActivatedAt": null,
    "blockedAt": "2020-01-01T00:00:00Z",
    "blockedReason": "Teveel velden met tijd.",

    "progression": {
        "chapters": {
            "total": 9,
            "completed": 9,
            "progress": "1.0"
        },
        "exams": {
            "total": 50,
            "completed": 3,
            "progress": "0.06"
        },
        "theoryLessons": {
            "total": 9,
            "completed": 7,
            "progress": "0.78"
        }
    }
}
```

### `403` Forbidden
`403001 broker_is_disabled`
<dfn>broker</dfn> is uitgeschakeld.

`403004 student_no_shared_progress`
De student heeft zijn **voortgang niet gedeeld** met de <dfn>reseller</dfn>.

### `404` Not Found
`404001 access_code_not_found`
Toegangscode niet gevonden.
