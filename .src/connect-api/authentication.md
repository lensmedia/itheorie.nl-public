# Authentication

Basic authentication is used to obtain a bearer token.
Authentication is done using the brokers lens id/password!

### Request
```http
GET /auth
Authorization: Basic aGE6aGE=
```

### Response
```json
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2OTMzMTYzMDIsImlzcyI6Iml0aGVvcmllIiwic3ViIjoiY29ubmVjdC1hcGkiLCJhdWQiOiJCcm9rZXIgVm9vcmJlZWxkIiwicGsiOiI5Zjhka0dubVFXbmZqRkVua3FwczM4azJDMTdjZDI0NWI1OWU0YTcwYjQ1Y2JmMWJhYmQwYzk0MTMzODVjM2Q2ODlhMzZjY2E2OThlOTY1ODczMzM5YyIsInVzZXIiOiIwMUg5MFFaOUQ5WVNOOVo5MFRXQzZSVEZCRSIsImNvbXBhbnkiOiIwMUg5MFBXRVRINDdaVEdKTVA2OTgxUE5KUSIsImFjY291bnQiOiIwMUg5MFE2MzJBNDVFWkpCTldDMURHUFdWUCJ9.nUoDm1rk7Jwg8HL--PC38J_R5nGnx0FyUUrySarfHek"
}
```

### Errors
* [`401001` BrokerAuthenticationFailed](errors/401.md)

## Bearer Token
For all other requests a bearer token is required.
```http
GET https://itheorie.nl/api/connect
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2OTMzMTYzMDIsImlzcyI6Iml0aGVvcmllIiwic3ViIjoiY29ubmVjdC1hcGkiLCJhdWQiOiJCcm9rZXIgVm9vcmJlZWxkIiwicGsiOiI5Zjhka0dubVFXbmZqRkVua3FwczM4azJDMTdjZDI0NWI1OWU0YTcwYjQ1Y2JmMWJhYmQwYzk0MTMzODVjM2Q2ODlhMzZjY2E2OThlOTY1ODczMzM5YyIsInVzZXIiOiIwMUg5MFFaOUQ5WVNOOVo5MFRXQzZSVEZCRSIsImNvbXBhbnkiOiIwMUg5MFBXRVRINDdaVEdKTVA2OTgxUE5KUSIsImFjY291bnQiOiIwMUg5MFE2MzJBNDVFWkpCTldDMURHUFdWUCJ9.nUoDm1rk7Jwg8HL--PC38J_R5nGnx0FyUUrySarfHek
```

### Errors
* [`401001` BrokerAuthenticationFailed](errors/401.md)
