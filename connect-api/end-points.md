# End Points
_p.s. de route paden zijn linkjes!_

## Cursussen
[`GET /courses`](end-points/get-courses.md) -
lijst met alle beschikbare cursussen.

## Resellers
[`GET /resellers`](end-points/get-resellers.md) -
lijst met alle resellers voor de huidige broker.

[`GET /resellers/{company}`](end-points/get-resellers-company.md) -
informatie over een specifieke reseller.

[`PATCH /resellers/{company}`](end-points/patch-resellers-company.md) -
gegevens aanpassen voor een specifieke reseller.

## Inkopen
[`GET /purchase/{company}`](end-points/get-purchase-company.md) -
geeft inkoop informatie terug voor een specifieke reseller (bv huidige prijs sinds deze niet statisch is).

[`POST /purchase/{company}`](end-points/post-purchase-company.md)  -
maakt een nieuwe aankoop aan voor een specifieke reseller.

## Terug kijken
[`GET /purchases/{company}`](end-points/get-purchases-company.md) -
lijst met alle aankopen voor een specifieke reseller

[`GET /purchases/{company}/{purchase}`](end-points/get-purchases-company-purchase.md) -
informatie over een specifieke aankoop

## Studenten gegevens (progressie)
[`GET /students/{accessCode}`](end-points/get-students-accesscode.md) - 
beknopte informatie over een student (progressie).

[`GET /students/{accessCode}/details`](end-points/get-students-accesscode-details.md) - 
uitgebreide informatie over een student en zijn progressie binnen iTheorie.

## Facturen
[`GET /invoices/{company}`](end-points/get-invoices-company.md) -
lijst met alle facturen voor een specifieke reseller.

[`GET /invoices/{company}/{invoice}`](end-points/get-invoices-company-invoice.md) -
download de factuur als PDF.
