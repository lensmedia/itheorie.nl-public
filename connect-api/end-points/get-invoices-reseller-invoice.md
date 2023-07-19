# Download de factuur als PDF

## Request
```http
GET /invoices/{reseller}/{invoice}
```

### Parameters
* `reseller` - `string` - ULID of KvK van <dfn>reseller</dfn>
* `invoice` - `int` - Factuurnummer

## Response
### `200` OK
Binary file response met de inhoud van het PDF-factuur bestand.

```http
HTTP/1.1 200 OK
Content-Type: application/pdf
Content-Length: 12345
Content-Disposition: attachment; filename=IT12345.pdf

%PDF-1.4
%����
1 0 obj

...
```

### `403` Forbidden
`403001 broker_is_disabled`
<dfn>broker</dfn> is uitgeschakeld.

`403002 reseller_is_disabled`
<dfn>reseller</dfn> is uitgeschakeld.

`403003 broker_missing_permission_from_reseller`
<dfn>broker</dfn> heeft geen toestemming van deze <dfn>reseller</dfn>. De factuur kan daarom niet gedownload worden.

### `404` Not Found
`404001 reseller_not_found`
<dfn>reseller</dfn> niet gevonden.
    
`404002 invoice_not_found`
<dfn>factuur</dfn> niet gevonden. Er is waarschijnlijk een onjuist factuur nummer gebruikt.
