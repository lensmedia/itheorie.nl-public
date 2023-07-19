# Uitgebreide informatie over een student en zijn progressie binnen iTheorie

## Request
```http
GET /students/{accessCode}/details
```

### Parameters
* `accessCode` - `string` - ULID of toegangscode (16 hexadecimale tekens)

## Response

Uitgebreide resultaten van de student:
- Alles van het samengevatte resultaat
- Array met hoofdstukken en wanneer afgelegd
- Array met theorielessen en wanneer gereserveerd (kun je ook loggen of ze die
  gevolgd hebben?) <= ook eventuele extra lessen
- Array met afgelegde exams: resultaat, aantal fouten per deel en fouten per
  onderwerp <= Hoe gaan we herhalingscursus enzo hier weergeven, gewoon
  herhalingsexamens toevoegen?