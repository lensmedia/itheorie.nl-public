# Lijst met alle aankopen voor een specifieke reseller

## Request
```http
GET /purchases/{reseller}
```

### Parameters
* `reseller` - `string` - ULID of KvK

## Response
Zelfde data als van [`POST /purchase/{reseller}`](post-purchase-company.md) (inkoop).
