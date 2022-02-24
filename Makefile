test:
	./bin/test

lint:
	composer exec phpcs -- --standard=PSR12 bin src tests