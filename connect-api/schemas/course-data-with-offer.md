### CourseData
| name            | type                              | description                                                                                                                                                            |
|-----------------|-----------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `id`            | `Ulid`                            | course identifier                                                                                                                                                      |
| `license`       | `string`                          | driver's license category (`b`: passenger car, `a`: motorcycle, `am`: moped)                                                                                           |
| `locale`        | `string`                          | language of the course `nl` or `en`                                                                                                                                    |
| `title`         | `string`                          | course title                                                                                                                                                           |
| `description`   | `string`                          | course description                                                                                                                                                     |
| `image`         | `string`                          | url to course image, does not contain any text but is unique to each course to use if you want to create some fancy layout                                             |
| `publishedAt`   | `DateTimeImmutable`               | date when the course was published                                                                                                                                     |
| `updatedAt`     | `DateTimeImmutable`               | date when the course was last updated (this does not work properly yet, it only updates when the course object itself changes not any of its child items, aka content) |
| `chapters`      | `string[]`                        | of chapter titles in the course                                                                                                                                        |
| `exams`         | `string[]`                        | of exam titles available in the course                                                                                                                                 |
| `theoryLessons` | `string[]`                        | of theory lessons available in the course                                                                                                                              |
| `offer`         | [`OfferData`](#offerdata)\|`null` | null detailed price info for the course                                                                                                                                |

### OfferData
| name                   | type              | description                                                                               |
|------------------------|-------------------|-------------------------------------------------------------------------------------------|
| `originalPrice`        | [`Money`](#money) | the original price for 1x iTheorie                                                        |
| `currentPrice`         | [`Money`](#money) | the current price for 1x iTheorie                                                         |
| `currentPriceDetails`  | `string`\|`null`  | description describing if and why the current price is not the same as the original price |
| `vat`                  | `string`          | vat percentage 0.0-1.0 (currently 0.21) that is used for the purchase                     |
| `suggestedRetailPrice` | [`Money`](#money) | the suggested retail price for the course                                                 |

### Money
| name       | type     | description                                     |
|------------|----------|-------------------------------------------------|
| `amount`   | `string` | Decimal value eg. `16.40`                       |
| `currency` | `string` | Used currency currently only `EUR` is possible. |


