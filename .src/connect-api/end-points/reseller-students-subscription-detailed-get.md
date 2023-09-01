# Detailed information about a students progression

## Request
```http
GET /{reseller}/students/{accessCode}/detailed
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
{INCLUDE:../includes/schemas/progression-chapter-detailed-data.md}

#### ProgressionExamData
{INCLUDE:../includes/schemas/progression-exam-detailed-data.md}

#### ProgressionTheoryLessonData
{INCLUDE:../includes/schemas/progression-theory-lesson-detailed-data.md}

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
        "updatedAt": "2023-08-29T18:20:56+02:00"
    },
    "courseCompletedAt": "2023-04-20T14:58:35+02:00",
    "refresherCourseActivatedAt": null,
    "blockedAt": null,
    "blockedReason": null,
    "progression": {
        "chapters": {
            "total": 9,
            "completed": 9,
            "progress": "1",
            "chapters": [
                {
                    "title": "Wetgeving",
                    "results": [
                        {
                            "completedAt": "2023-04-20T14:58:34+02:00"
                        }
                    ]
                },
                {
                    "title": "Voertuigkennis",
                    "results": [
                        {
                            "completedAt": "2023-04-20T14:58:34+02:00"
                        }
                    ]
                }
            ]
        },
        "exams": {
            "total": 50,
            "completed": 10,
            "progress": "0.2",
            "exams": [
                {
                    "title": "Examen 1",
                    "results": [
                        {
                            "completedAt": "2023-04-20T14:58:35+02:00",
                            "mappedScore": 65,
                            "achievedScore": 60,
                            "passed": true
                        }
                    ]
                },
                {
                    "title": "Examen 2",
                    "results": [
                        {
                            "completedAt": "2023-04-20T14:58:35+02:00",
                            "mappedScore": 65,
                            "achievedScore": 54,
                            "passed": false
                        }
                    ]
                },
                {
                    "title": "Examen 3",
                    "results": []
                }
            ]
        },
        "theoryLessons": {
            "total": 9,
            "attended": 9,
            "reservations": [
                {
                    "title": "Wetgeving",
                    "reservations": [
                        {
                            "createdAt": "2023-04-20T14:58:56+02:00",
                            "theoryLessonStartsAt": "2023-04-30T10:00:00+02:00",
                            "theoryLessonEndsAt": "2023-04-30T10:50:00+02:00",
                            "hasAttended": true
                        }
                    ]
                },
                {
                    "title": "Voertuigkennis",
                    "reservations": [
                        {
                            "createdAt": "2022-08-05T19:30:00+02:00",
                            "theoryLessonStartsAt": "2022-08-07T19:30:00+02:00",
                            "theoryLessonEndsAt": "2022-08-07T20:30:00+02:00",
                            "hasAttended": true
                        }
                    ]
                }
            ],
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
