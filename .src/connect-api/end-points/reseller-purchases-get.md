# List with all purchases made by the reseller.

## Request
```http
GET /{reseller}/purchases
```

### Parameters
* {INCLUDE:../includes/reseller-parameter.md}

#### Query Parameters
{INCLUDE:../includes/pagination-parameters.md}

### Filters
WIP

## Response
### Schema

#### Collection
{INCLUDE:../includes/schemas/pagination.md}
| `data` | `PurchaseData[]` | List with all purchases made by the reseller. |

### Example
```json
{
    "links": {
        "first": "https://test.itheorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/purchases?page=1",
        "previous": "https://test.itheorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/purchases?page=3",
        "self": "https://test.itheorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/purchases?page=4",
        "last": "https://test.itheorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/purchases?page=4"
    },
    "data": [
        {
            "id": "01H90Z030C2X1KXS06EPPSYQ7E",
            "invoice": 12353,
            "createdAt": "2023-08-29T17:36:05+02:00",
            "price": {
                "amount": "16.45",
                "currency": "EUR"
            },
            "subscription": "01H90Z0320W4JZ5BPWFV13MQEF",
            "accessCode": "e9fdfd45e2a39ad6",
            "expiresAt": "2026-08-01T00:00:00+02:00",
            "loginUrl": "https://test.itheorie.nl/login",
            "directLoginUrl": "https://test.itheorie.nl/qr?code=e9fdfd45e2a39ad6",
            "name": "Pietje Puk",
            "email": "pietje.puk@voorbeeld.nl",
            "mobilePhoneNumber": "+31612345678"
        }
    ]
}
```

### Errors

#### {INCLUDE:../includes/reseller-parameter-title.md}
{INCLUDE:../includes/reseller-parameter-errors.md}
