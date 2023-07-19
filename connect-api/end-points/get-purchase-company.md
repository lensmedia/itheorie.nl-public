# Geeft inkoop informatie terug voor een specifieke reseller
Geeft huidige inkoop informatie terug voor een specifieke reseller (bv prijs aangezien deze niet statisch is).

## Request
```http
GET /purchase/{company}
```

### Parameters
* `company` - `string` - ULID of KvK

## Response
- Brutoprijs
- Korting = (1 – (netto/bruto)) * 100
- Nettoprijs
- Aangepaste prijsbeschrijving
