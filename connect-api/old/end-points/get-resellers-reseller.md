# Reseller informatie
Gedetailleerde informatie over een <dfn>reseller</dfn>.<br>

## Request
```http
GET /resellers/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>

## Responses
### `200` OK

#### Schema
| veld                                  | beschrijving                                                                                                                 |
|---------------------------------------|------------------------------------------------------------------------------------------------------------------------------|
| `id: string`                          | ULID van <dfn>reseller</dfn>                                                                                              |
| `name: string`                        | Naam van de <dfn>reseller</dfn>                                                                                              |
| `address: object`                     | Adresgegevens van de <dfn>reseller</dfn>                                                                                     |
| `address.streetName: string`          | Straatnaam van de <dfn>reseller</dfn>                                                                                        |
| `address.streetNumber: int`           | Huisnummer van de <dfn>reseller</dfn>                                                                                        |
| `address.addition: null\|string`      | Huisnummertoevoeging van de <dfn>reseller</dfn>                                                                              |
| `address.zipCode: string`             | Postcode van de <dfn>reseller</dfn>                                                                                          |
| `address.city: string`                | Plaatsnaam van de <dfn>reseller</dfn>                                                                                        |
| `address.country: string`             | Landcode van de <dfn>reseller</dfn>                                                                                          |
| `address.latitude: string`            | Latitude van de <dfn>reseller</dfn>                                                                                          |
| `address.longitude: string`           | Longitude van de <dfn>reseller</dfn>                                                                                         |
| `billing: object`                     | Facturatiegegevens van de <dfn>reseller</dfn>                                                                                |
| `billing.accountHolder: null\|string` | Rekeninghouder <dfn>reseller</dfn> voor de betaling                                                                          |
| `billing.iban: null\|string`          | IBAN van de <dfn>reseller</dfn> waar de betaling mee gedaan zal worden                                                       |
| `billing.email: null\|string`         | E-mailadres van de <dfn>reseller</dfn>                                                                                       |
| `billing.address: null\|object`       | Factuuradres van de <dfn>reseller</dfn> (zelfde schema als `address`) als deze afwijkt van het normale adres (anders `null`) |
| `canNotPurchase: bool`                | `true` als de <dfn>reseller</dfn> geen inkopen kan doen                                                                      |
| `canNotPurchaseReason?: string`       | Reden waarom de <dfn>reseller</dfn> niet kan inkopen. Alleen gevuld als `canNotPurchase` `true` is.                          |

#### Voorbeeld
```json
{
    "name": "iTheorie rijd met je mee",
    "email": "peter@betaald.wel",
    "address": {
        "streetName": "Energiestraat",
        "streetNumber": 5,
        "addition": null,
        "zipCode": "8051TE",
        "city": "Hattem",
        "country": "nl",
        "latitude": "52.4858361",
        "longitude": "6.0352262"
    },
    "billing": {
        "accountHolder": "iTheorie",
        "iban": null,
        "address": null
    },
    "canNotPurchase": true,
    "canNotPurchaseReason": "Geen betaalgegevens bekend"
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
