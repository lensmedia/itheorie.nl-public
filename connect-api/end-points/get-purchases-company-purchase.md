# Informatie over een specifieke aankoop

## Request
```http
GET /purchases/{reseller}/{purchase}
```

### Parameters
* `reseller` - `string` - ULID of KvK

## Response
Resultaat:
- Inlogcode
- ExpiraUedatum
- URL
- Cursusnaam
- Taal
- Inkoopprijs
- Aankoopdatum
