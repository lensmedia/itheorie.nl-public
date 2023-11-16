| name                         | type                      | description                                                                    |
|------------------------------|---------------------------|--------------------------------------------------------------------------------|
| `id`                         | `Ulid`                    | subscription id                                                                |
| `accessCode`                 | `string`                  | access code for this subscription                                              |
| `createdAt`                  | `DateTime`\|`null`        | timestamp when the subscription was created                                    |
| `expiresAt`                  | `DateTime`\|`null`        | timestamp when the subscription stops working                                  |
| `activatedAt`                | `DateTime`\|`null`        | timestamp when the course was selected for this                                |
| `lastSeenAt`                 | `DateTime`\|`null`        | timestamp when the user was last seen visiting a page                          |
| `course`                     | `CourseData`\|`null`      | the course information for the activated course                                |
| `courseCompletedAt`          | `DateTime`\|`null`        | timestamp when the theory section of the course was first completed            |
| `refresherCourseActivatedAt` | `DateTime`\|`null`        | timestamp when the refresher course was last activated                         |
| `blockedAt`                  | `DateTime`\|`null`        | timestamp of when the user was blocked                                         |
| `blockedReason`              | `string`\|`null`          | reason why this access code is blocked                                         |
| `progress`                   | `string`                  | progress percentage (0.0 - 1.0)                                                |
| `progressUrl`                | `string`\|`null`          | URL to progress overview page, not available if course is null (not activated) |
| `progression`                | `ProgressionData`\|`null` | progression for the student, not available if course is null (not activated)   |
