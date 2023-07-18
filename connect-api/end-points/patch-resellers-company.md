# Reseller informatie
Rijschool gegevens updaten <dfn>reseller</dfn>.<br>

```apacheconf
PATCH /resellers/{company}
```

## Parameters
* `company` - `string` (ULID of KvK)

## Responses
### `404` Not Found
<dfn>Reseller</dfn> is niet gevonden in ons systeem.

### `403` Forbidden
<dfn>Broker</dfn> heeft geen toestemming van deze <dfn>reseller</dfn>.

### `200` OK

### WIP
- Naam rijschool
- Postadres
- Factuuradres + factuur e-mail
- Rekeninghouder/IBAN
- URL om IBAN te wijzigen/in te stellen => Naar iTheorie pagina met alleen
  betaalmogelijkheid (zonder inlog)
- Wel of niet mogen inkopen + reden
