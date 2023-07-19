# Error codes
Komen met een HTTP status code en in de response zit een error object met een unique fout code en fout naam. 

De gebruikte codes staan ook bij elke endpoint, maar hier is een overzicht van alle mogelijke fouten.

## Voorbeeld
```json
{
    "code": 12345,
    "error": "error_name",
    "error_description": "Error description"
}
```

## Fouten
### `400` Bad Request
| Code     | Naam                | Omschrijving                                     |
|----------|---------------------|--------------------------------------------------|
| `400001` | `bad_request`       | Reserved.                                        |
| `400100` | `validation_failed` | Validate op verstuurde data is niet goed gegaan. |

### `403` Forbidden
| Code     | Naam                                 | Omschrijving                                                                                   |
|----------|--------------------------------------|------------------------------------------------------------------------------------------------|
| `403001` | `broker_no_permission_from_reseller` | <dfn>Broker</dfn> heeft geen toestemming om deze actie uit te voeren voor <dfn>reseller</dfn>. |

### `404` Not Found
| Code     | Naam                 | Omschrijving                                         |
|----------|----------------------|------------------------------------------------------|
| `404001` | `reseller_not_found` | <dfn>Reseller</dfn> is niet gevonden in ons systeem. |
| `404002` | `invoice_not_found` | Factuur is niet gevonden in ons systeem. |
