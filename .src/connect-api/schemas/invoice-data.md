| name           | type       | description                                            |
|----------------|------------|--------------------------------------------------------|
| `id`           | `int`      | invoice number, without the `IT` prefix                |
| `createdAt`    | `DateTime` | timestamp for when the invoice was created             |
| `total`        | `Money`    | invoice total without vat                              |
| `vat`          | `array`    | array vat values by percentage (key) and value (value) |
| `totalWithVat` | `Money`    | invoice total including vat                            |
