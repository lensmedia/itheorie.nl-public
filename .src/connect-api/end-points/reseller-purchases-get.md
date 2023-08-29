# Lijst met alle aankopen voor een specifieke reseller

_**WIP!** this requires pagination, forgot about that!_

## Request
```http
GET /{reseller}/purchases
```

### Parameters
* `reseller` - `string` - ULID or KvK of <dfn>reseller</dfn>

### Filters
_**Nog niet uitgedacht**, maar uiteindelijk waarschijnlijk wel. De mogelijkheid om te zoeken op velden leek mij hier wel handig helemaal als een <dfn>reseller</dfb> veel inkoopt._

## Response
### `200` OK
#### Schema

#### Example
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
### `404` Not Found
