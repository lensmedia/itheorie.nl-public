# OfferData
| type                | name                   | description                                                                               |
|---------------------|------------------------|-------------------------------------------------------------------------------------------|
| [`Money`](money.md) | `originalPrice`        | the original price for 1x iTheorie                                                        |
| [`Money`](money.md) | `currentPrice`         | the current price for 1x iTheorie                                                         |
| `string`\|`null`    | `currentPriceDetails`  | description describing if and why the current price is not the same as the original price |
| `string`            | `vat`                  | vat percentage 0.0-1.0 (currently 0.21) that is used for the purchase                     |
| [`Money`](money.md) | `suggestedRetailPrice` | the suggested retail price for the course                                                 |
