# Reseller informatie
Rijschool gegevens updaten <dfn>reseller</dfn>.

### Request

```http
PATCH /resellers/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>

## Responses
### `200` OK
#### WIP
- Naam rijschool
- Postadres
- Factuuradres + factuur email
- Rekeninghouder/IBAN
- URL om IBAN te wijzigen/in te stellen => Naar iTheorie pagina met alleen betaalmogelijkheid (zonder inlog)
- Wel of niet mogen inkopen + reden

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
