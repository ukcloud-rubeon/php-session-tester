## Session Cookie Tester

This is a simple PHP app that creates a 1-hour session.  Useful for testing
sticky sessions and load balancers.

Usage:

```bash
docker run -d -p 8080:80 --name my-apache-php-app \
           -v "$PWD":/var/www/html php:7.2-apache
```

