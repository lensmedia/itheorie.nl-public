# Download invoice as PDF

## Request
```http
GET /{reseller}/invoices/{invoice}
```

### Parameters
* {INCLUDE:../includes/reseller-parameter.md}
* `invoice` - `int` - Invoice number (without `IT` prefix as mentioned in the invoice itself)

## Response
File response with content of the invoice PDF.

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

### Errors

#### {INCLUDE:../includes/reseller-attribute-title.md}
{INCLUDE:../includes/reseller-errors.md}

#### Invoice attribute
* {ERROR:invoice_not_found}
