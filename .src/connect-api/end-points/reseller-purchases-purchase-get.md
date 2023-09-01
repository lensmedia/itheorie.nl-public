# Purchase details

## Request
```http
GET /{reseller}/purchases/{purchase}
```

### Parameters
* {INCLUDE:../includes/reseller-parameter.md}
* `purchase` - `string` - ULID of the purchase

## Response

### Schema
#### PurchaseData
{INCLUDE:../includes/schemas/purchase-data.md}

#### Money
{INCLUDE:../includes/schemas/money.md}

### Example
```json
{
    "id": "01H910J9TXYFCT994W4JFN0RD7",
    "invoice": null,
    "createdAt": "2023-08-29T18:03:30+02:00",
    "price": {
        "amount": "16.45",
        "currency": "EUR"
    },
    "subscription": "01H910J9WJVR9GBHY9G43ZRA03",
    "accessCode": "9827c1e3cafe4b2a",
    "expiresAt": "2026-08-01T00:00:00+02:00",
    "loginUrl": "https://test.itheorie.nl/inloggen",
    "directLoginUrl": "https://test.itheorie.nl/qr?code=9827c1e3cafe4b2a",
    "name": "Voorbeeld Cursist",
    "email": "cursist@voorbeeld.nl",
    "mobilePhoneNumber": "+31612345678"
}
```

### Errors

#### {INCLUDE:../includes/reseller-parameter-title.md}
{INCLUDE:../includes/reseller-parameter-errors.md}

#### Purchase parameter
* {ERROR:purchase_not_found}
