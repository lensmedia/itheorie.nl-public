# Informatie over een specifieke aankoop
Dezelfde informatie als te vinden is in de lijst van [:link: `GET /purchases/{reseller}`](get-purchases-reseller.md). Maar dan voor een specifieke aankoop.

## Request
```http
GET /purchases/{reseller}/{purchase}
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>

## Response
### `200` OK
#### Schema
| veld                              | beschrijving                                               |
|-----------------------------------|------------------------------------------------------------|
| `@broker: string`                 | API URL van de broker.                                     |
| `@reseller: string`               | API URL van de reseller.                                   |
| `@course: string`                 | API URL van de cursus.                                     |
| `@invoice: null\|string`          | API URL van de factuur (als deze gefactureerd is).         |
| `id: string`                      | UID van aankoop                                            |
| `invoice: null\|int`              | Factuurnummer                                              |
| `createdAt: datetime`             | Datum van aankoop                                          |
| `accessCode: string`              | Toegangscode bij de aankoop.                               |
| `expiresAt: datetime`             | Datum waarop de toegangscode verloopt.                     |"
| `currency: string`                | Valuta van de aankoop. Momenteel altijd `EUR`.             |
| `price: string`                   | Prijs van de aankoop.                                      |
| `loginUrl: string`                | iTheorie login URL                                         |
| `directLoginUrl: string`          | Directe iTheorie login URL.                                |
| `name: string`                    | Naam van de gebruiker.                                     |
| `email: string`                   | E-mailadres van de gebruiker.                              |
| `mobile: string`                  | Mobiel nummer van de gebruiker.                            |
| `permissionToShareProgress: bool` | Toestemming om voortgang te delen met <dfn>reseller</dfn>. |

#### Voorbeeld
```json
{
    "@broker": "/resellers/01GC7ABB22TT7Y6883YPVHFCG5.json",
    "@reseller": "/resellers/02GC7ABB22TT7Y6883YPVHFCG5.json",
    "@course": "/courses/04GC7ABB22TT7Y6883YPVHFCG5.json",
    "@invoice": "/invoices/02GC7ABB22TT7Y6883YPVHFCG5/06GC7ABB22TT7Y6883YPVHFCG5.json",
    "id": "03GC7ABB22TT7Y6883YPVHFCG5",
    "createdAt": "2023-01-01T00:00:00+00:00",
    "currency": "EUR",
    "price": "16.80",
    "invoice": 51231,
    "accessCode": "0A1B2C3456D7E8F9",
    "expiresAt": "2025-01-01T00:00:00+00:00
    "loginUrl": "https://itheorie.nl/inloggen",
    "directLoginUrl": "https://itheorie.nl/qr?code=0A1B2C3456D7E8F9",
    "name": "Pietje Puk",
    "email": "pietje.puk@voorbeeld.nl",
    "mobile": "+31612345678",
    "permissionToShareProgress": true
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
