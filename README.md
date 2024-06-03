## Setup

1. Clone the repo:
```
git clone https://github.com/iskandar93/user-service.git
```

2. Install composer package and dependencies:

```
composer install
```

3. Copy .env.example to .env file

4. Generate key
```
php artisan key:generate
```

5. Create a database based on `DB_DATABASE` name on .env file

6. Run this command
- This command will generate migration file, seeding and install passport client with secret
```
composer migrate-fresh
```

7. Start a dev server with port `8002`
```
php artisan serve --port=8002
```

8. Run this API `{url}/oauth/token` on Postman to generate client access token
- Get this client id and secret from database table oauth_client under `ClientCredentials Grand Client`
```
x-www-form-urlencoded
grant_type=client_credentials
client_id= 
client_secret= 
scope=
```

9. Copy access_token from API `/oauth/token` and paste into user_service .env file 
```
PLAYLIST_PLATFORM_URL=http://127.0.0.1:8001
ACCESS_TOKEN_TO_PLAYLIST_PLATFORM=
```

10. Run `php artisan config:cache`

11. Run API `{url}/api/v1/user/subscription/{id}`
