# Lijst met alle facturen voor een specifieke reseller.

## Request
```http
GET /{reseller}/invoices
```

### Parameters
* {INCLUDE:../includes/reseller-parameter.md}

#### Query Parameters
{INCLUDE:../includes/pagination-parameters.md}

## Response
### Schema
{INCLUDE:../includes/schemas/pagination.md}
| `data` | `InvoiceData[]` | List with all purchases made by the reseller. |

#### InvoiceData
{INCLUDE:../includes/schemas/invoice-data.md}

#### Money
{INCLUDE:../includes/schemas/money.md}

#### Voorbeeld
```json
{
    "links": {
        "first": "https://test.itheorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/invoices?page=1",
        "self": "https://test.itheorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/invoices?page=1",
        "last": "https://test.itheorie.nl/api/connect/01H90PZFEDWE3YWZJPD8Z7030P/invoices?page=1"
    },
    "data": [
        {
            "id": 12353,
            "createdAt": "2023-09-01T17:13:45+02:00",
            "amountOfPurchases": 10,
            "total": {
                "amount": "79.62",
                "currency": "EUR"
            },
            "vat": {
                "0.21": "13.82"
            },
            "totalWithVat": {
                "amount": "93.44",
                "currency": "EUR"
            }
        }
    ]
}
```

### Errors

#### {INCLUDE:../includes/reseller-attribute-title.md}
{INCLUDE:../includes/reseller-errors.md}
