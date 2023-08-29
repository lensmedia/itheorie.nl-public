# Maakt een nieuwe aankoop aan voor een specifieke reseller.
## Request

```http
POST /{reseller}/purchases
```

### Parameters
* `reseller` - `string` - ULID or KvK of <dfn>reseller</dfn>

## Request
### Schema
| veld                                  | beschrijving                                                                                                                                                                                                                                                                               |
|---------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `course?: string`                     | ULID id van de cursus die je wil activeren. Kan weggelaten worden als je de cursist zelf wil laten kiezen welke opleiding ze gaan volgen bij de eerste keer inloggen.                                                                                                                      |
| `name?: string`                       | Naam van de leerling. _**optioneel tenzij** `permissions_to_share_progress` op `true` is gezet. Dan hebben wij een naam nodig om deze weer te geven op de rijschool en cursisten pagina van https://itheorie.nl._                                                                          |
| `email?: string`                      | E-mailadres van de leerling. _Deze word alleen gebruikt voor notificaties van belangrijke wijzigingen (bijvoorbeeld een theorieles die niet doorgaat)._                                                                                                                                    |
| `mobilePhone?: string`                | Mobiele telefoonnummer van de leerling (Bij voorkeur internationaal formaat `+31612345678` anders word deze automatisch omgezet wat niet altijd goed gaat). _Deze word alleen gebruikt voor SMS notificaties van belangrijke wijzigingen (bijvoorbeeld een theorieles die niet doorgaat)._ |
| `permissionToShareProgress?: boolean` | Ja/nee of de <dfn>reseller</dfn> toestemming heeft gekregen van de leerling om de voortgang te kunnen inzien (standaard `false`). Zonder deze toestemming kan de <dfn>reseller</dfn> de `/students/{accessCode}` routes waar de voortgang te zien is niet bekijken.                        |

### Example
```json
{
    "course": "01GYFBWMYGGARXBN40X7FFDCNZ",
    "name": "Voorbeeld Cursist",
    "email": "cursist@voorbeeld.nl",
    "mobilePhone": "+31612345678",
    "permissionToShareProgress": true
}
```

## Response
### `303` See Other
Bij **succes** word je doorgestuurd naar [:link: `/{reseller}/purchases/{purchase}`](reseller-purchases-purchase-get.md).

### `400` Bad Request
### `402` Validation Failed
```json
{
    "status": 401,
    "code": 0,
    "message": "Validation failed",
    "violations": [
        {
            "code": "1a1560ed-f121-434c-83a9-202f90f684ab",
            "message": "De gevraagde cursus is ongeldig of niet meer beschikbaar.",
            "propertyPath": "course",
            "parameters": {
                "course": "01GC7ABB22TT7Y6883YPVHFCG5"
            }
        }
    ]
}
```
### `403` Forbidden
### `404` Not Found
