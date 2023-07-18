# Geeft inkoop informatie terug voor een specifieke reseller

Geeft huidige inkoop informatie terug voor een specifieke reseller (bv prijs aangezien deze niet statisch is).

```apacheconf
GET /purchase/{company}
```

## Response
- Brutoprijs
- Korting = (1 – (netto/bruto)) * 100
- Nettoprijs
- Aangepaste prijsbeschrijving
