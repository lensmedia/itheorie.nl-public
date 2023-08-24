# Lijst met alle facturen voor een specifieke reseller.

## Request
```http
GET /invoices/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>

## Response
### `200` OK
#### Schema
| veld                   | beschrijving                                                                                   |
|------------------------|------------------------------------------------------------------------------------------------|
| `id: int`              | Factuurnummer word vermeld in het formaat `IT12345` op de facturen intern gebruikt zonder `IT` |
| `createdAt: datetime`  | Datum wanneer de factuur is aangemaakt                                                         |
| `total: string`        | Decimaal als string                                                                            |
| `totalWithVat: string` | Decimaal als string                                                                            |
| `currency: string`     | Voorlopig altijd `EUR`                                                                         |

#### Voorbeeld
```json
[{
    "id": 51224,
    "createdAt": "2019-01-01T00:00:00+00:00",
    "total": "89.00",
    "totalWithVat": "111.14", 
    "currency": "EUR"    
}, {
   ...
}]
```

### `403` Forbidden
`403001 broker_is_disabled`
<dfn>broker</dfn> is uitgeschakeld.

`403002 reseller_is_disabled`
<dfn>reseller</dfn> is uitgeschakeld.

`403003 broker_missing_permission_from_reseller`
<dfn>broker</dfn> heeft geen toestemming van deze <dfn>reseller</dfn>.

### `404` Not Found
`404001 reseller_not_found`
<dfn>reseller</dfn> niet gevonden.
