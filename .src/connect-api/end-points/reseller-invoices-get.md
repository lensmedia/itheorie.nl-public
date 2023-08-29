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
[[INCLUDE:../schemas/invoice-data.md]]

##### Money
[[INCLUDE:../schemas/money.md]]

#### Voorbeeld
### `403` Forbidden
