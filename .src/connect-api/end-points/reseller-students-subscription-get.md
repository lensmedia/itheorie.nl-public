# Brief information about a students progression

## Request
```http
GET /{reseller}/students/{accessCode}
```

### Parameters
* {INCLUDE:../includes/reseller-parameter.md}
* {INCLUDE:../includes/access-code-parameter.md}

## Response
### Schema

#### SubscriptionData
{INCLUDE:../includes/schemas/subscription-data.md}

#### CourseData
{INCLUDE:../includes/schemas/course-data.md}

#### ProgressionData
{INCLUDE:../includes/schemas/progression-data.md}

#### ProgressionChapterData
{INCLUDE:../includes/schemas/progression-chapter-data.md}

#### ProgressionExamData
{INCLUDE:../includes/schemas/progression-exam-data.md}

#### ProgressionTheoryLessonData
{INCLUDE:../includes/schemas/progression-theory-lesson-data.md}

### Example
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
        "image": "https://test.itheorie.nl/assets/images/course/fallback.jpg",
        "publishedAt": "2023-04-20T14:58:06+02:00",
        "updatedAt": "2023-08-29T18:23:55+02:00"
    },
    "courseCompletedAt": "2023-04-20T14:58:35+02:00",
    "refresherCourseActivatedAt": null,
    "blockedAt": null,
    "blockedReason": null,
    "progress": "0.8134",
    "progressUrl": "https://test.itheorie.nl/voortgang/wLz4fPuVbmN7-RQ8YsO0kwAaP-ysJ4OTggl87R-CCk_DS8~",
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

### Errors
#### {INCLUDE:../includes/reseller-parameter-title.md}
{INCLUDE:../includes/reseller-parameter-errors.md}

#### {INCLUDE:../includes/subscription-parameter-title.md}
{INCLUDE:../includes/subscription-parameter-errors.md}

#### Miscellaneous
* {ERROR:reseller_can_not_view_subscription}
