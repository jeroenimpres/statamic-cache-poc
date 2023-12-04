Please see `config/statamic/static_caching.php` for the 'exclude' options we use.

These are filled like https://statamic.dev/static-caching#excluding-pages states.

---

Seems to work as expected when running `ddev artisan optimize:clear` after every change in the .env and `static_caching.php` file.

---

.env:
```
APP_URL="http://statamic-cache-poc.ddev.site"
APP_KEY=base64:Ay3fPS/+6CKYq8erqSmmGXLSCMO5m8qP5vi5/VDGJoo=
APP_ENV=production
APP_DEBUG=false
APP_NAME="Statamic Cache POC"

VITE_PORT=5134

STATAMIC_STATIC_CACHING_STRATEGY=half
```