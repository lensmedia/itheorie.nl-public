# Title

## Request
```http
GET /{reseller}/purchases/{purchase}
```

### Parameters
* `reseller` - `string` - ULID or KvK of <dfn>reseller</dfn>
* `purchase` - `string` - ULID of <dfn>purchase</dfn>

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
