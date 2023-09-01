| name                    | type                  | description                                                         |
|-------------------------|-----------------------|---------------------------------------------------------------------|
| `accountHolder`         | `string`\|`null`      | reseller account holder name                                        |
| `iban`                  | `string`\|`null`      | reseller account number (IBAN)                                      |
| `billingAddress`        | `AddressData`\|`null` | reseller billing address falling back to default address if not set |
| `canPurchase`           | `bool`                | whether the reseller can purchase products                          |
| `canNotPurchaseReasons` | `string[]`            | reasons why the reseller can not purchase products                  |
