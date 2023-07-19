# Reseller informatie
Rijschool gegevens updaten <dfn>reseller</dfn>.

### Request

```http
PATCH /resellers/{company}
```

### Parameters
* `company` - `string` - ULID of KvK

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

#### `error_broker_no_permission_from_reseller`
```json
{
    "code": 13124,
    "error": "broker_no_permission_from_reseller",
    "error_description": "Broker has no permission to access this reseller"
}
```

### `200` OK

### WIP
- Naam rijschool
- Postadres
- Factuuradres + factuur e-mail
- Rekeninghouder/IBAN
- URL om IBAN te wijzigen/in te stellen => Naar iTheorie pagina met alleen
  betaalmogelijkheid (zonder inlog)
- Wel of niet mogen inkopen + reden
