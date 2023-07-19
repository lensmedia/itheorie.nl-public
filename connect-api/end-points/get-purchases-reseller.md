# Lijst met alle aankopen voor een specifieke reseller

_**Belangrijk!** hier komt waarschijnlijk pagination bij in, maar hoe dat gaat werken is nog niet bedacht._

## Request
```http
GET /purchases/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>

### Filters
_**Nog niet uitgedacht**, maar uiteindelijk waarschijnlijk wel. De mogelijkheid om te zoeken op velden leek mij hier wel handig helemaal als een <dfn>reseller</dfb> veel inkoopt._

## Response
### `200` OK
#### Schema
| veld                                      | beschrijving                                                                              |
|-------------------------------------------|-------------------------------------------------------------------------------------------|
| `@reseller: string`                       | API URL van de reseller.                                                                  |
| `@broker: string`                         | API URL van de broker.                                                                    |
| `loginUrl: string`                        | iTheorie login URL.                                                                       |
| `directLoginUrl: string`                  | Directe iTheorie login URL met code (`__CODE__` moet vervangen worden met de echte code). |
| `items: array`                            | Lijst met de aankopen.                                                                    |
| `items[].@course: string`                 | API URL van de cursus.                                                                    |
| `items[].@invoice: null\|string`          | API URL van de factuur (als deze gefactureerd is).                                        |
| `items[].id: string`                      | ULID van aankoop.                                                                         |
| `items[].invoice: null\|int`              | Factuurnummer.                                                                            |
| `items[].createdAt: datetime`             | Datum van aankoop.                                                                        |
| `items[].accessCode: string`              | Toegangscode bij de aankoop.                                                              |
| `items[].currency: string`                | Valuta van de aankoop. Momenteel altijd `EUR`.                                            |
| `items[].price: string`                   | Prijs van de aankoop.                                                                     |
| `items[].name: string`                    | Naam van de gebruiker.                                                                    |
| `items[].email: string`                   | E-mailadres van de gebruiker.                                                             |
| `items[].mobile: string`                  | Mobiel nummer van de gebruiker.                                                           |
| `items[].permissionToShareProgress: bool` | Toestemming om voortgang te delen met <dfn>reseller</dfn>.                                |

#### Voorbeeld
```json
{
    "@broker": "/resellers/01GC7ABB22TT7Y6883YPVHFCG5.json",
    "@reseller": "/resellers/02GC7ABB22TT7Y6883YPVHFCG5.json",
    "loginUrl": "https://itheorie.nl/inloggen",
    "directLoginUrl": "https://itheorie.nl/qr?code=__CODE__",
    "items": [{
        "@purchase": "/purchases/03GC7ABB22TT7Y6883YPVHFCG5.json", 
        "@course": "/courses/04GC7ABB22TT7Y6883YPVHFCG5.json",
        "id": "03GC7ABB22TT7Y6883YPVHFCG5",
        "createdAt": "2023-01-01T00:00:00+00:00",
        "currency": "EUR",
        "price": "16.80",
        "invoice": 51231,
        "accessCode": "0A1B2C3456D7E8F9",
        "name": "Pietje Puk",
        "email": "pietje.puk@voorbeeld.nl",
        "mobile": "+31612345678",
        "permissionToShareProgress": true
    }, {
        ...
    }]
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
