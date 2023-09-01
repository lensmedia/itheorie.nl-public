| name                   | type             | description                                                                               |
|------------------------|------------------|-------------------------------------------------------------------------------------------|
| `originalPrice`        | `Money`          | the original price for 1x iTheorie                                                        |
| `currentPrice`         | `Money`          | the current price for 1x iTheorie                                                         |
| `currentPriceDetails`  | `string`\|`null` | description describing if and why the current price is not the same as the original price |
| `vat`                  | `Percentage`     | vat percentage 0.0-1.0 (currently 0.21) that is used for the purchase                     |
| `suggestedRetailPrice` | `Money`          | the suggested retail price for the course                                                 |
