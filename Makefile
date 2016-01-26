composer.phar:
	curl -sS https://getcomposer.org/installer | php

phpunit.phar:
	curl -L -O https://phar.phpunit.de/phpunit.phar

.PHONY: all
all: phpunit.phar composer.phar
	php ./composer.phar self-update
	php ./composer.phar install --prefer-source
	php ./composer.phar update
	#php ./phpunit.phar

.PHONY: static
static:
	./make-static.sh

.PHONY: deploy
deploy: static
	./deploy.sh


