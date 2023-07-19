# Informatie over een specifieke aankoop

## Request
```http
GET /purchases/{company}/{purchase}
```

### Parameters
* `company` - `string` - ULID of KvK

## Response
Resultaat:
- Inlogcode
- ExpiraUedatum
- URL
- Cursusnaam
- Taal
- Inkoopprijs
- Aankoopdatum
