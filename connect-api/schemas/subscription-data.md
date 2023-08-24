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

### CourseData
| name            | type                                 | description                                                                                                                                                            |
|-----------------|--------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `id`            | `Ulid`                               | course identifier                                                                                                                                                      |
| `license`       | `string`                             | driver's license category (`b`: passenger car, `a`: motorcycle, `am`: moped)                                                                                           |
| `locale`        | `string`                             | language of the course `nl` or `en`                                                                                                                                    |
| `title`         | `string`                             | course title                                                                                                                                                           |
| `description`   | `string`                             | course description                                                                                                                                                     |
| `image`         | `string`                             | url to course image, does not contain any text but is unique to each course to use if you want to create some fancy layout                                             |
| `publishedAt`   | `DateTimeImmutable`                  | date when the course was published                                                                                                                                     |
| `updatedAt`     | `DateTimeImmutable`                  | date when the course was last updated (this does not work properly yet, it only updates when the course object itself changes not any of its child items, aka content) |
| `chapters`      | `string[]`                           | of chapter titles in the course                                                                                                                                        |
| `exams`         | `string[]`                           | of exam titles available in the course                                                                                                                                 |
| `theoryLessons` | `string[]`                           | of theory lessons available in the course                                                                                                                              |
| `offer`         | [`OfferData`](offer-data.md)\|`null` | null detailed price info for the course                                                                                                                                |

### OfferData
| name                   | type                | description                                                                               |
|------------------------|---------------------|-------------------------------------------------------------------------------------------|
| `originalPrice`        | [`Money`](money.md) | the original price for 1x iTheorie                                                        |
| `currentPrice`         | [`Money`](money.md) | the current price for 1x iTheorie                                                         |
| `currentPriceDetails`  | `string`\|`null`    | description describing if and why the current price is not the same as the original price |
| `vat`                  | `string`            | vat percentage 0.0-1.0 (currently 0.21) that is used for the purchase                     |
| `suggestedRetailPrice` | [`Money`](money.md) | the suggested retail price for the course                                                 |

### Money
| name       | type     | description                                     |
|------------|----------|-------------------------------------------------|
| `amount`   | `string` | Decimal value eg. `16.40`                       |
| `currency` | `string` | Used currency currently only `EUR` is possible. |




### ProgressionData
| name            | type       | description                     |
|-----------------|------------|---------------------------------|
| `chapters`      | `string[]` | theory section progression info |
| `exams`         | `string[]` | practise exam progression info  |
| `theoryLessons` | `string[]` | theory lessons progression info |

