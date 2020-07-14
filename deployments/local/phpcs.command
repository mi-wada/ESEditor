#!/bin/sh
docker exec -it local_php.ponion-lab.es-editor_1 ash -c '/var/www/vendor/bin/phpcs --standard=PSR2 --ignore=/var/www/vendor/*,/var/www/application/views/* /var/www'