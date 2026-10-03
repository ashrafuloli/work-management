
## Sass Watch

```bash
sass --watch "/Users/ashrafuloli/www/work-management/public/assets/scss/app.scss":"/Users/ashrafuloli/www/work-management/public/assets/css/app.css"
```

```bash
php artisan translations:sync
```


```bash
php artisan translations:sync --check
```

Email check

```bash
php artisan queue:work --queue=notifications,default
```

তাই cPanel Cron-এ এই command রাখো:

```bash
cd /home/USERNAME/path/to/work-management && /usr/local/bin/php artisan queue:work database --queue=notifications,default --stop-when-empty --tries=3 --timeout=120
```


