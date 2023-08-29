# Reseller informatie
Gedetailleerde informatie over een <dfn>reseller</dfn>.<br>

## Request
```http
GET /{reseller}
```
```http
GET https://test.theorie.nl/api/connect/69599068
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>

## Responses
### `200` OK

#### Schema
#### Example
```json
{
    "id": "01H90PZFEDWE3YWZJPD8Z7030P",
    "name": "Reseller Voorbeeld",
    "email": null,
    "defaultAddress": {
        "streetName": "Oosterwal",
        "streetNumber": 4,
        "addition": null,
        "zipCode": "7241AP",
        "city": "Lochem",
        "country": "NL"
    },
    "billing": {
        "accountHolder": null,
        "iban": null,
        "billingAddress": null,
        "canPurchase": false,
        "canNotPurchaseReasons": {
            "400003": "Reseller mist een e-mail contactmethode.",
            "400002": "Reseller mist een incasso betaalmethode."
        }
    }
}
```

### `401` Unauthorized
### `403` Forbidden
### `404` Not Found
