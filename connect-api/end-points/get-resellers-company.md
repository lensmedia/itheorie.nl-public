# Reseller informatie
Gedetailleerde informatie over een <dfn>reseller</dfn>.<br>
_- legacy api: rijschool.info_

```apacheconf
GET /resellers/{company}
```
## Parameters
* `company` - `string` (ULID of KvK)

## Responses
### `404` Not Found
<dfn>Reseller</dfn> is niet gevonden in ons systeem.

### `403` Forbidden
<dfn>Broker</dfn> heeft geen toestemming van deze <dfn>reseller</dfn>.

### `200` OK
- Naam rijschool
- Postadres
- Factuuradres + factuur e-mail
- Rekeninghouder/IBAN
- URL om IBAN te wijzigen/in te stellen
- Wel of niet mogen inkopen + reden
