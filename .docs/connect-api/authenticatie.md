# Authenticatie

[[INCLUDE:schemas/address-data.md]]

## JSON Login
Het plan is om in eerste instantie JSON Login te gebruiken om een token te genereren.
Voor de login gegevens worden de LENS-ID gebruikersnaam en wachtwoord gebruikt.

### Request
```http
POST /auth
Content-Type: application/json

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
