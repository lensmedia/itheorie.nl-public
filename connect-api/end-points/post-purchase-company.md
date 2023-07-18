# Maakt een nieuwe aankoop aan voor een specifieke reseller.

```apacheconf
POST /purchase/{company}
````

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
