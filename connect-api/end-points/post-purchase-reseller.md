# Maakt een nieuwe aankoop aan voor een specifieke reseller.
## Request

```http
POST /purchase/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>

## Request
### Schema
| veld                                  | beschrijving                                                                                                                                                                                                                                                                               |
|---------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `course?: string`                     | ULID id van de cursus die je wil activeren. Kan weggelaten worden als je de cursist zelf wil laten kiezen welke opleiding ze gaan volgen bij de eerste keer inloggen.                                                                                                                      |
| `name?: string`                       | Naam van de leerling. _**OPTIONEEL TENZEI** `permissions_to_share_progress` op `true` is gezet. Dan hebben wij een naam nodig om deze weer te geven op de rijschool en cursisten pagina van https://itheorie.nl._                                                                          |
| `email?: string`                      | E-mailadres van de leerling. _Deze word alleen gebruikt voor notificaties van belangrijke wijzigingen (bijvoorbeeld een theorieles die niet doorgaat)._                                                                                                                                    |
| `mobile?: string`                     | Mobiele telefoonnummer van de leerling (Bij voorkeur internationaal formaat `+31612345678` anders word deze automatisch omgezet wat niet altijd goed gaat). _Deze word alleen gebruikt voor SMS notificaties van belangrijke wijzigingen (bijvoorbeeld een theorieles die niet doorgaat)._ |
| `permissionToShareProgress?: boolean` | Ja/nee of de <dfn>reseller</dfn> toestemming heeft gekregen van de leerling om de voortgang te kunnen inzien (standaard `false`). Zonder deze toestemming kan de <dfn>reseller</dfn> de `/students/{accessCode}` routes waar de voortgang te zien is niet bekijken.                        |
 
### Voorbeeld
```json
{
    "course": "01GC7ABB22TT7Y6883YPVHFCG5",
    "name": "Pietje Puk",
    "email": "pietje.puk@voorbeeld.nl",
    "mobile": "+31612345678",
    "permissionToShareProgress": true
}
```

## Response
### `303` See Other
Bij **succes** word je doorgestuurd naar de [:link: `/purchases/{reseller}/{purchase}`](get-purchases-reseller-purchase.md).

### `400` Bad Request
`400100 validation_failed`
validatie van de verstuurde data is niet goed gegaan.

### `402` Payment Required
`402001 missing_payment_information`
aankoop is niet gratis en er zijn geen betaal gegevens bij ons bekend van <dfn>reseller</dfn>.

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
