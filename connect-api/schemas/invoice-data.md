### CourseData
| name           | type                | description                                            |
|----------------|---------------------|--------------------------------------------------------|
| `total`        | [`Money`](money.md) | invoice total without vat                              |
| `vat`          | `array`             | array vat values by percentage (key) and value (value) |
| `totalWithVat` | [`Money`](money.md) | invoice total including vat                            |
| `id`           | `int`               | invoice number, without the `IT` prefix                |
| `createdAt`    | `DateTimeImmutable` | timestamp for when the invoice was created             |
| `purchases`    | `int`               | int sum of product items (access codes) in the invoice |

### Money
| name       | type     | description                                     |
|------------|----------|-------------------------------------------------|
| `amount`   | `string` | Decimal value eg. `16.40`                       |
| `currency` | `string` | Used currency currently only `EUR` is possible. |

