up:
	docker compose up -d

down:
	docker compose down

restart:
	docker compose down
	docker compose up -d

up-build:
	docker compose up -d --build

test:
# phpでのテストを用意するの待ち.....
