### SubscriptionData
| name                         | type                                             | description                                                                  |
|------------------------------|--------------------------------------------------|------------------------------------------------------------------------------|
| `id`                         | `Ulid`                                           | subscription id                                                              |
| `accessCode`                 | `string`                                         | access code for this subscription                                            |
| `createdAt`                  | `DateTimeImmutable`\|`null`                      | timestamp when the subscription was created                                  |
| `expiresAt`                  | `DateTimeImmutable`\|`null`                      | timestamp when the subscription stops working                                |
| `activatedAt`                | `DateTimeImmutable`\|`null`                      | timestamp when the course was selected for this                              |
| `lastSeenAt`                 | `DateTimeImmutable`\|`null`                      | timestamp when the user was last seen visiting a page                        |
| `course`                     | [`CourseData`](course-data.md)\|`null`           | the course information for the activated course                              |
| `courseCompletedAt`          | `DateTimeImmutable`\|`null`                      | timestamp when the theory section of the course was first completed          |
| `refresherCourseActivatedAt` | `DateTimeImmutable`\|`null`                      | timestamp when the refresher course was last activated                       |
| `blockedAt`                  | `DateTimeImmutable`\|`null`                      | timestamp of when the user was blocked                                       |
| `blockedReason`              | `string`\|`null`                                 | reason why this access code is blocked                                       |
| `progression`                | [`ProgressionData`](progression-data.md)\|`null` | progression for the student, not available if course is null (not activated) |

[[INCLUDE:course-data.md]]

[[INCLUDE:progression-data.md]]
