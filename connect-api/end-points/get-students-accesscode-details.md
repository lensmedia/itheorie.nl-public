# Uitgebreide informatie over een student en zijn progressie binnen iTheorie

## Request
```http
GET /students/{accessCode}/details
```

### Parameters
* `accessCode` - `string` - ULID of toegangscode (16 hexadecimale tekens)

## Response
#### Schema
| veld                                                           | beschrijving                                                                                                                                                                                                                                                                         |
|----------------------------------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `@course: string`                                              | API url naar de cursus                                                                                                                                                                                                                                                               |
| `id: string`                                                   | Unieke identifier van de toegangscode (ULID)                                                                                                                                                                                                                                         |
| `accessCode: string`                                           | Toegangscode (16 hexadecimale tekens)                                                                                                                                                                                                                                                |
| `expiresAt: datetime`                                          | Datum waarop de toegangscode verloopt                                                                                                                                                                                                                                                |
| `activatedAt: datetime`                                        | Datum waarop de toegangscode is geactiveerd                                                                                                                                                                                                                                          |
| `lastSeenAt: datetime`                                         | Datum waarop de toegangscode voor het laatst is gebruikt                                                                                                                                                                                                                             |
| `course: string`                                               | Titel van de cursus                                                                                                                                                                                                                                                                  |
| `courseCompletedAt: datetime`                                  | Datum waarop het theorie gedeelte voor het eerst is afgerond                                                                                                                                                                                                                         |
| `refresherCourseActivatedAt: datetime`                         | Datum waarop de herhalingscursus is geactiveerd                                                                                                                                                                                                                                      |
| `blockedAt: null\|datetime`                                    | Datum waarop de toegangscode is geblokkeerd                                                                                                                                                                                                                                          |
| `blockedReason?: string`                                       | Reden waarom de toegangscode is geblokkeerd (alleen als `blockedAt` een waarde heeft)                                                                                                                                                                                                |
| `progression: object`                                          | Voortgang van de student                                                                                                                                                                                                                                                             |
| `progression.chapters: object`                                 | Voortgang van de hoofdstukken                                                                                                                                                                                                                                                        |
| `progression.chapters.total: number`                           | Totaal aantal hoofdstukken                                                                                                                                                                                                                                                           |
| `progression.chapters.completed: number`                       | Aantal afgeronde hoofdstukken                                                                                                                                                                                                                                                        |
| `progression.chapters.progress: number`                        | Percentage afgeronde hoofdstukken (deze kan afwijken van wat je verwacht omdat deze berekend word aan de hand van de verwachte tijd die nodig is om een hoofdstuk af te ronden en wat al afgerond is en niet simpel `hoofdstukken/totaal` aangezien niet elk hoofdstuk even lang is) |
| `progression.chapters.chapters: array`                         | Array met informatie over de hoofdstukken                                                                                                                                                                                                                                            |
| `progression.chapters.chapters[].title: string`                | Titel van het hoofdstuk                                                                                                                                                                                                                                                              |
| `progression.chapters.chapters[].completedAt: array`           | Array met datums waarop het hoofdstuk is afgerond (dit kunnen er meerdere zijn als ze terug gestuurd zijn vanuit een examen)                                                                                                                                                         |
| `progression.exams: object`                                    | Voortgang van de examens                                                                                                                                                                                                                                                             |
| `progression.exams.total: number`                              | Totaal aantal examens                                                                                                                                                                                                                                                                |
| `progression.exams.completed: number`                          | Aantal afgeronde examens (zelfde verhaal als bij `progression.chapters.progress`, echter momenteel hebben alle examens de zelfde verwachtingstijd)                                                                                                                                   |
| `progression.exams.progress: number`                           | Percentage afgeronde examens                                                                                                                                                                                                                                                         |
| `progression.exams.exams: array`                               | Array met informatie over de examens                                                                                                                                                                                                                                                 |
| `progression.exams.exams[].title: string`                      | Titel van het examen                                                                                                                                                                                                                                                                 |
| `progression.exams.exams[].completedAt: array`                 | Array met datums waarop het examen is afgerond (dit kunnen er meerdere zijn als ze de herhalings cursus geactiveerd hebben)                                                                                                                                                          |
| `progression.theoryLessons: object`                            | Voortgang van de theorie lessen                                                                                                                                                                                                                                                      |
| `progression.theoryLessons.total: number`                      | Totaal aantal theorie lessen                                                                                                                                                                                                                                                         |
| `progression.theoryLessons.completed: number`                  | Aantal afgeronde theorie lessen                                                                                                                                                                                                                                                      |
| `progression.theoryLessons.progress: number`                   | Percentage afgeronde theorie lessen                                                                                                                                                                                                                                                  |
| `progression.theoryLessons.theoryLessons: array`               | Array met informatie over de theorie lessen                                                                                                                                                                                                                                          |
| `progression.theoryLessons.theoryLessons[].title: string`      | Titel van de theorie les                                                                                                                                                                                                                                                             |
| `progression.theoryLessons.theoryLessons[].completedAt: array` | Array met datums waarop de theorie les is afgerond (dit kunnen er meerdere zijn als ze deze nogmaals gekocht hebben)                                                                                                                                                                 |

#### Voorbeeld
```json
{
    "@course": "/courses/04GC7ABB22TT7Y6883YPVHFCG5.json",
    "id": "01GC7ABB22TT7Y6883YPVHFCG5",
    "accessCode": "0A1B2C3456D7E8F9",
    "expiresAt": "2020-01-01T00:00:00Z",
    "course": "Theoriecursus personenauto",
    "activatedAt": "2020-01-01T00:00:00Z",
    "lastSeenAt": "2020-01-01T00:00:00Z",
    "courseCompletedAt": "2020-01-01T00:00:00Z",
    "refresherCourseActivatedAt": "2020-01-01T00:00:00Z",
    "blockedAt": "2020-01-01T00:00:00Z",
    "blockedReason": "Teveel velden met tijd.",

    "progression": {
        "chapters": {
            "total": 9,
            "completed": 9,
            "progression": "0.3",
            "chapters": [{
                "title": "Wetgeving",
                "completedAt": [
                    "2020-01-01T00:00:00Z"
                ]
            }]
        },
        "exams": {
            "total": 50,
            "completed": 3,
            "progression": "0.06",
            "exams": [{
                "title": "Examen 1",
                "completedAt": [
                    "2020-01-01T00:00:00Z",
                    "2023-01-01T00:00:00Z"
                ]
            }, {
                "title": "Examen 2",
                "completedAt": [
                    "2020-01-01T00:00:00Z"
                ]
            }, {
                ...
            }]
        }, 
        "theoryLessons": {
            "total": 9,
            "completed": 7,
            "progression": "0.78",
            "theoryLessons": [{
                "title": "Wetgeving",
                "completedAt": [
                    "2023-01-01T00:00:00Z"
                ]
            }, {
                "title": "Weet zo even de naam van hoofstuk 2 niet meer",
                "completedAt": [
                    "2023-01-01T00:00:00Z",
                    "2023-02-01T00:00:00Z"
                ]
            }, {
                ...
            }]
        }
    }
}
```

Uitgebreide resultaten van de student:
- Alles van het samengevatte resultaat
- Array met hoofdstukken en wanneer afgelegd
- Array met theorielessen en wanneer gereserveerd (kun je ook loggen of ze die
  gevolgd hebben?) <= ook eventuele extra lessen
- Array met afgelegde exams: resultaat, aantal fouten per deel en fouten per
  onderwerp <= Hoe gaan we herhalingscursus enzo hier weergeven, gewoon
  herhalingsexamens toevoegen?
