# Reseller informatie
Gedetailleerde informatie over een <dfn>reseller</dfn>.<br>
_- legacy api: rijschool.info_

## Request
```http
GET /resellers/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK

## Responses
### `404` Not Found
<dfn>Reseller</dfn> is niet gevonden in ons systeem.

#### `error_reseller_not_found`
```json
{
    "code": 15122,
    "error": "reseller_not_found",
    "error_description": "Reseller not found"
}
```

### `403` Forbidden
<dfn>Broker</dfn> heeft geen toestemming van deze <dfn>reseller</dfn>.

### `200` OK
- Naam rijschool
- Postadres
- Factuuradres + factuur e-mail
- Rekeninghouder/IBAN
- URL om IBAN te wijzigen/in te stellen
- Wel of niet mogen inkopen + reden
