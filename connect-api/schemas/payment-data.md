# PaymentData
| type                                     | name             | description                                                         |
|------------------------------------------|------------------|---------------------------------------------------------------------|
| `string`\|`null`                         | `accountHolder`  | reseller account holder name                                        |
| `string`\|`null`                         | `iban`           | reseller account number (IBAN)                                      |
| [`AddressData`](address-data.md)\|`null` | `billingAddress` | reseller billing address falling back to default address if not set |
