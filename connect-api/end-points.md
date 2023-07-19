# End Points

## Cursussen
[:link: `GET /courses`](end-points/get-courses.md) -
lijst met alle actieve cursussen.

[:link: `GET /courses/{course}`](end-points/get-courses-course.md) -
informatie over een cursus (ook als deze niet meer actief is).

## Resellers
[:link: `GET /resellers/{reseller}`](end-points/get-resellers-reseller.md) -
informatie over een reseller.

[:link: `PATCH /resellers/{reseller}`](end-points/patch-resellers-reseller.md) -
gegevens aanpassen voor een reseller.

## Inkopen
[:link: `GET /purchase/{reseller}`](end-points/get-purchase-reseller.md) -
geeft inkoop informatie terug voor een reseller (bv huidige prijs aangezien deze niet statisch is).

[:link: `POST /purchase/{reseller}`](end-points/post-purchase-reseller.md)  -
maakt een nieuwe aankoop aan voor een reseller.

## Inkopen terug kijken
[:link: `GET /purchases/{reseller}`](end-points/get-purchases-reseller.md) -
lijst met alle aankopen voor een reseller

[:link: `GET /purchases/{reseller}/{purchase}`](end-points/get-purchases-reseller-purchase.md) -
informatie over een aankoop

## Studenten gegevens (progressie)
[:link: `GET /students/{accessCode}`](end-points/get-students-accesscode.md) - 
beknopte informatie over een student (progressie).

[:link: `GET /students/{accessCode}/details`](end-points/get-students-accesscode-details.md) - 
uitgebreide informatie over een student en zijn progressie binnen iTheorie.

## Facturen
[:link: `GET /invoices/{reseller}`](end-points/get-invoices-reseller.md) -
lijst met alle facturen voor een reseller.

[:link: `GET /invoices/{reseller}/{invoice}`](end-points/get-invoices-reseller-invoice.md) -
download de factuur als PDF.
