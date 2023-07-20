# Geeft inkoop informatie terug voor een specifieke reseller
Geeft huidige inkoop informatie terug voor een specifieke reseller.

**Let op!** De prijs is persoonlijk voor elke <dfn>reseller</dfn>. Deze kan variëren op basis van gemaakte afspraken of aantal ingekochte toegangscodes.

## Request
```http
GET /purchase/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>

## Response

### `200` OK
#### Schema
| veld                            | beschrijving                                                                                        |
|---------------------------------|-----------------------------------------------------------------------------------------------------|
| `currency: string`              | Voorlopig altijd `EUR`.                                                                             |
| `vat: string`                   | BTW percentage wat gerekend word.                                                                   |
| `originalPrice: string`         | De originele verkoop prijs voor 1x iTheorie.                                                        |
| `price: string`                 | De prijs die gebruikt word.                                                                         |
| `suggestedRetailPrice: string`  | Adviesprijs.                                                                                        |
| `discount: float`               | Hoeveel korting in procent (0-1) die gegeven gaat worden.                                           | 
| `priceDetails: null\|string`    | Omschrijving waarom de prijs als de prijs is afgeweken van normaal en anders is de waarde leeg.     |
| `canNotPurchase: bool`          | <dfn>Reseller</dfn> kan geen inkopen doen.                                                          |
| `canNotPurchaseReason?: string` | Reden waarom de <dfn>reseller</dfn> niet kan inkopen. Alleen gevuld als `canNotPurchase` `true` is. |

#### Voorbeeld
```json
{
    "currency": "EUR",
    "vat": "0.21",
    "originalPrice": "16.80",
    "price": "12.60",
    "priceDetails": "Korting VRB",
    "suggestedRetailPrice": "49.00",
    "discount": "0.25",
    "canNotPurchase": true,
    "canNotPurchaseReason": "Geen betaalgegevens bekend"
}
```
```json
{
    "currency": "EUR",
    "vat": "0.21",
    "originalPrice": "16.80",
    "price": "16.80",
    "priceDetails": null,
    "suggestedRetailPrice": "49.00",
    "discount": 0,
    "canNotPurchase": false
}
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
