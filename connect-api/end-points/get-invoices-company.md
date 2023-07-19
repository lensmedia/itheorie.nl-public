# Lijst met alle facturen voor een specifieke reseller.

## Request
```http
GET /invoices/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK

## Response
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

### `403` Forbidden
<dfn>Broker</dfn> heeft geen toestemming van deze <dfn>reseller</dfn>. En kan daarom de facturen niet downloaden.

#### `broker_no_permission_from_reseller`
```json
{
    "code": 403001,
    "error": "broker_no_permission_from_reseller",
    "error_description": "Broker has no permission to access this reseller"
}
```

### `404` Not Found
<dfn>Reseller</dfn> niet gevonden.

#### `reseller_not_found`
```json
{
    "code": 404001,
    "error": "reseller_not_found",
    "error_description": "Reseller not found"
}
```
