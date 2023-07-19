# Authenticatie

## JSON Login
Plan is om JSON Login te gebruiken om een token te genereren.
Voor de login gegevens worden de LENS-ID gebruikersnaam en wachtwoord gebruikt.

### Request
```http
POST /auth
```

```json
{
    "username": "naam@example.com",
    "password": "MyPassword"
}
```

### Response
```json
{
    "token": "AUBGaqengpimaksg0dgksgsmhASFasn80etc"
}
```

Alle andere requests werken alleen met een bearer token.
```http
GET https://itheorie.nl/api/connect/courses
Authorization: Bearer AUBGaqengpimaksg0dgksgsmhASFasn80etc
```

## Bestaande klanten
Bestaande klanten kunnen gelijk hun secret key gebruiken als bearer token.
Als de JSON inlog gebruikt wordt veranderd de secret key ook 
voor de legacy API mochten ze die nog steeds draaien.
