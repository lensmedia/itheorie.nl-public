# Error codes
Error codes komen met een HTTP status code en in de response zit een error object met een unique fout code, naam en omschrijving.
Deze hebben voor bijna alles dezelfde properties met uitzondering van validatie fouten (`validation_failed`), daar komen meer velden bij.

## Voorbeeld
```json
{
    "code": 12345,
    "error": "error_name",
    "error_description": "Error description"
}
```

De gebruikte codes staan ook bij elke endpoint, maar hier is een overzicht van alle mogelijke fouten.

## Fouten
### `400` Bad Request
| Code     | Naam                | Omschrijving                                     |
|----------|---------------------|--------------------------------------------------|
| `400100` | `validation_failed` | Validate op verstuurde data is niet goed gegaan. |

**Belangrijk!** `validation_failed` response syntax is nog niet bekend/. Ik heb op dit 
moment geen voorbeeld bij de hand hoe ons PHP-framework deze omzet naar JSON. Ik ga 
z.s.m. even een test voor opzetten en hier een voorbeeld plaatsen.

### `402` Payment Required
| Code     | Naam                          | Omschrijving                                                                                   |
|----------|-------------------------------|------------------------------------------------------------------------------------------------|
| `402001` | `missing_payment_information` | Aankoop is niet gratis en er zijn geen betaal gegevens bij ons bekend van <dfn>reseller</dfn>. |

### `403` Forbidden
| Code     | Naam                                      | Omschrijving                                                                                   |
|----------|-------------------------------------------|------------------------------------------------------------------------------------------------|
| `403001` | `broker_is_disabled`                      | <dfn>Broker</dfn> is geblokkeerd.                                                              |
| `403002` | `reseller_is_disabled`                    | <dfn>Reseller</dfn> is geblokkeerd.                                                            |
| `403003` | `broker_missing_permission_from_reseller` | <dfn>Broker</dfn> heeft geen toestemming om deze actie uit te voeren voor <dfn>reseller</dfn>. |
| `403004` | `student_no_shared_progress`              | De student heeft zijn voortgang niet gedeeld met de <dfn>reseller</dfn>.                       |

### `404` Not Found
| Code     | Naam                    | Omschrijving                          |
|----------|-------------------------|---------------------------------------|
| `404001` | `reseller_not_found`    | <dfn>Reseller</dfn> is niet gevonden. |
| `404002` | `invoice_not_found`     | Factuur is niet gevonden.             |
| `404003` | `access_code_not_found` | Toegangscode is niet gevonden.        |

### `500` Internal Server Error
Als deze voor komt is er iets helemaal mis gegaan en moeten wij weer aan de slag. Laat het 
ons a.u.b. z.s.m. weten! Bij voorkeur onder vermelding van het tijdstip en wat er gedaan werd
zodat wij de fout kunnen opzoeken in de log files en kunnen testen!

### `503` Service Unavailable
Het kan voorkomen dat we iTheorie aan het updaten zijn, meestal is dat met een paar seconden 
gebeurd en merkt niemand er wat van. Maar soms moeten we wat tijd reserveren voor het draaien 
van een migratie. Op dat moment zou het kunnen voorkomen dat de API tijdelijk niet beschikbaar
is. 
