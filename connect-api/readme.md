# Connect API
## Bijzonderheden
Voordat we beginnen. Wij gaan er van uit dat de meeste technische termen m.b.t. HTTP/REST API/JSON bekend zijn, deze documentatie is niet bedoeld voor als je nog nooit met API's (en IT'ers) hebt gewerkt.

Buiten de technische termen om zijn er nog wat extra puntjes van aandacht die gebruikt worden in deze documentatie die misschien onduidelijk kunnen zijn:
<dl>
<dt><dfn>reseller</dfn>, rijscholen, verkoper</dt>
<dd>Bedrijven/instanties die de uiteindelijke aankoop/betaling doen.</dd>
<dt><dfn>broker</dfn>, tussenpersoon, wederverkoper, affiliate</dt>
<dd>De bedrijven/instanties die gebruik maken van deze API</dd>
<dt><dfn>legacy api</dfn></dt>
<dd>Verwijzing naar onze verouderde JSON RPC Connect API, word soms gebruikt i.v.m. met migraties</dd>
<dt><dfn>kvk</dfn></dt>
<dd>Kamer van Koophandel nummer (8 cijfers, als string want soms beginnen ze met een 0), deze word regelmatig gebruik als argumenten in verschillende end points. Let er op dat deze kan aangepast kan worden. Het is in onze nieuwe API ook mogelijk om met statische IDs te werken.</dd>
</dl>

## Laten we beginnen
Onze API heeft de naam Connect API gekregen (omdat hij op dat pad te vinden was). Deze API is bedoeld voor <dfn id="broker">brokers</dfn> die gebruik maken van onze diensten.  Het uiteindelijke doel van deze api is om geautomatiseerd iTheorie toegangscodes te verkopen via/aan externe partijen.

Alles komt onder dezelfde URL als de legacy api. Root POST oproepen (`POST /api/connect`) gaan nog naar het oude systeem (die blijft voorlopig nog gewoon werken). Alle andere routes onder `/api/connect` gaan naar onze nieuwe API (waar we hier voor zijn!).

### JSON
Onze api maakt gebruik van JSON. We gaan proberen zoveel mogelijk gebruik te maken van de guidelines van JSON+LD om te linken naar andere resources. Echter omdat dit om een relatief simpele API gaat zitten hier nog geen complexe systemen achter die dat automatisch doen. 

### Contact
Het kan uiteraard zo wezen dat er soms verwijzingen of andere dingen missen of niet kloppen, is dit het geval? Laat het ons weten!

Voor algemene vragen kan je terecht bij [Peter Somers](mailto:p.somers@lensmedia.nl). Voor technische vragen/suggesties kan je via de email terecht bij onze [IT-afdeling](mailto:it@lensmedia.nl), of gebruik [github issues](https://github.com/lensmedia/itheorie.nl-public/issues)!

## Verder lezen
* [Authenticatie](authenticatie.md)
* [Error codes](error-codes.md)
* [End points](end-points.md)
