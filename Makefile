.PHONY: psalm
psalm:
	@echo Run psalm
	php ./vendor/bin/psalm --threads=8 --show-info=true
