docker-up-daemon:
	docker compose up -d

docker-shell: ## Open a shell into the web(php) container
	docker compose exec webserver bash

docker-stop:
	docker compose down