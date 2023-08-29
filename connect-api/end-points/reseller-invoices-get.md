# Lijst met alle facturen voor een specifieke reseller.

## Request
```http
GET /{reseller}/invoices/
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>

## Response
### `200` OK
#### Schema
##### InvoiceData
| name           | type       | description                                            |
|----------------|------------|--------------------------------------------------------|
| `id`           | `int`      | invoice number, without the `IT` prefix                |
| `createdAt`    | `DateTime` | timestamp for when the invoice was created             |
| `total`        | `Money`    | invoice total without vat                              |
| `vat`          | `array`    | array vat values by percentage (key) and value (value) |
| `totalWithVat` | `Money`    | invoice total including vat                            |


##### Money
| name       | type     | description                                     |
|------------|----------|-------------------------------------------------|
| `amount`   | `string` | Decimal value eg. `16.40`                       |
| `currency` | `string` | Used currency currently only `EUR` is possible. |


#### Voorbeeld
### `403` Forbidden
