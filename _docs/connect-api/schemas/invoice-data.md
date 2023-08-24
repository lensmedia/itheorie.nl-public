# CourseData
| type                | name           | description                                            |
|---------------------|----------------|--------------------------------------------------------|
| [`Money`](money.md) | `total`        | invoice total without vat                              |
| `array`             | `vat`          | array vat values by percentage (key) and value (value) |
| [`Money`](money.md) | `totalWithVat` | invoice total including vat                            |
| `int`               | `id`           | invoice number, without the `IT` prefix                |
| `DateTimeImmutable` | `createdAt`    | timestamp for when the invoice was created             |
| `int`               | `purchases`    | int sum of product items (access codes) in the invoice |
