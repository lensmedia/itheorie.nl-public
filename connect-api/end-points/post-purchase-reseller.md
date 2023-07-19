# Maakt een nieuwe aankoop aan voor een specifieke reseller.

## Request

```http
POST /purchase/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK

## Request
- Id van opleiding (/courses)
- Naam cursist (optioneel)
- E-mail cursist (optioneel)
- Mobiel cursist (optioneel) <= wil Peter gaan gebruiken voor notificaties (?)
- Toestemming gegevens delen met rijschool

## Response
- Inlogcode
- Expiratie datum
- URL
- Cursusnaam
- Taal