# Lijst met alle facturen voor een specifieke reseller.

```http
GET /invoices/{company}
```

## Parameters
* `company` - `string` - ULID of KvK

## Response
### Schema
| veld | type | beschrijving |
|-|-|-|
| `id` | `int` | Factuurnummer word vermeld in het formaat `IT12345` op de facturen |
| `created_at` | `datetime` | Datum wanneer de factuur is aangemaakt |
| `total` | `string` | Decimaal als string |
| `total_with_vat` | `string` | Decimaal als string |
| `currency` | `string` | Voorlopig altijd `EUR` |

### Voorbeeld
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
