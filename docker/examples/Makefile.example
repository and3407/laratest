ifneq (,$(wildcard ./.env))
    include .env
    export
endif

APP_NAME ?= myapp
COMPOSE_PROJECT_NAME ?= $(APP_NAME)

.PHONY: run stop restart logs clean create-network remove-network

run:
	docker-compose up -d --build

down:
	docker-compose down

create-network:
	@if [ -z "$(APP_NAME)" ]; then \
		echo "APP_NAME is not set"; \
		exit 1; \
	fi
	@if ! docker network inspect $(APP_NAME)_network >/dev/null 2>&1; then \
		docker network create $(APP_NAME)_network; \
		echo "Network $(APP_NAME)_network created"; \
	else \
		echo "Network $(APP_NAME)_network already exists"; \
	fi

remove-network:
	@if docker network inspect $(APP_NAME)_network >/dev/null 2>&1; then \
		docker network rm $(APP_NAME)_network; \
		echo "Network $(APP_NAME)_network removed"; \
	else \
		echo "Network $(APP_NAME)_network does not exist"; \
	fi
