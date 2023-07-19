# Geeft inkoop informatie terug voor een specifieke reseller
Geeft huidige inkoop informatie terug voor een specifieke reseller.

**Let op!** De prijs is persoonlijk voor elke <dfn>reseller</dfn>. Deze kan variëren op basis van gemaakte afspraken of aantal ingekochte toegangscodes.

## Request
```http
GET /purchase/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK

## Response

### `200` OK
#### Schema
| veld | type | beschrijving |
|-|-|-|
| `currency` | `string` | Voorlopig altijd `EUR` |
| `original_price` | `string` | De originele verkoop prijs voor 1x iTheorie |
| `price` | `string` | De prijs die gebruikt word |
| `discount` | `float` (0-1) | Hoeveel korting in procent die gegeven word |
| `price_details` | `string` | Omschrijving waarom de prijs als de prijs is afgeweken van normaal en anders is de waarde leeg |

#### Voorbeeld
```json
{
    "currency": "EUR",
    "original_price": "16.80",
    "price": "12.60",
    "discount": 0.25,
    "price_details": "Korting VRB"
}
```
```json
{
    "currency": "EUR",
    "original_price": "16.80",
    "price": "16.80",
    "discount": 0,
    "price_details": ""
}
```

### `404` Not Found
#### `reseller_not_found` <dfn>reseller</dfn> niet gevonden.
```json
{
    "code": 404001,
    "error": "reseller_not_found",
    "error_description": "Reseller not found"
}
```
