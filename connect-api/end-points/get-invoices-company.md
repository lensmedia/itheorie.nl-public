# Lijst met alle facturen voor een specifieke reseller.

## Request
```http
GET /invoices/{company}
```

### Parameters
* `company` - `string` - ULID of KvK

## Response
### `404` Not Found
<dfn>Reseller</dfn> niet gevonden.

#### `error_reseller_not_found`
```json
{
    "code": 15122,
    "error": "reseller_not_found",
    "error_description": "Reseller not found"
}
```

### `403` Forbidden
<dfn>Broker</dfn> heeft geen toestemming van deze <dfn>reseller</dfn>.

### `200` OK
#### Schema
| veld | type | beschrijving |
|-|-|-|
| `id` | `int` | Factuurnummer word vermeld in het formaat `IT12345` op de facturen intern gebruikt zonder `IT` |
| `created_at` | `datetime` | Datum wanneer de factuur is aangemaakt |
| `total` | `string` | Decimaal als string |
| `total_with_vat` | `string` | Decimaal als string |
| `currency` | `string` | Voorlopig altijd `EUR` |

#### Voorbeeld
```json
[{
    "id": 51224,
    "created_at": "2019-01-01T00:00:00+00:00",
    "total": "89.00",
    "total_with_vat": "111.14", 
    "currency": "EUR"    
}, {
    ...
}]
```
