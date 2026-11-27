# Speach

A Laravel 12 + React + PostgreSQL application, containerised with Docker.

## Stack

- PHP 8.4 / Laravel 12
- React 18 / Vite 6
- PostgreSQL 17
- Docker Compose
- GitHub Actions CI

## Run with Docker

```bash
git clone https://github.com/rami-aouinti/speach.git
cd speach
cp .env.example .env
docker compose up --build -d
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate --seed --force
```

Open http://localhost:8080. The API health endpoint is http://localhost:8080/api/health.

## Domain

- A category has a unique name and can contain many posts.
- A post belongs to exactly one category and stores a title, a rich-text description and a rich-text detailed description. Both descriptions support formatting through Tiptap.
- The board displays categories horizontally, with each category's posts below it. Selecting a post opens its full rich-text detail in a modal. Post creation and editing use Tiptap's formatting toolbar (bold, italic, underline, headings, lists, quotes, alignment, links, undo and redo).
- Categories and posts can be created, edited and deleted from the React interface.

## API

| Method | Endpoint | Description |
| --- | --- | --- |
| GET | `/api/categories` | List categories with posts |
| POST | `/api/categories` | Create a category |
| PUT | `/api/categories/{id}` | Update a category |
| DELETE | `/api/categories/{id}` | Delete a category and its posts |
| POST | `/api/posts` | Create a post |
| PUT | `/api/posts/{id}` | Update a post |
| DELETE | `/api/posts/{id}` | Delete a post |

## Tests and frontend checks

```bash
composer install
php artisan test
npm install
npm run lint
npm run build
```

GitHub Actions runs Laravel feature tests against PostgreSQL and checks/lints/builds the React frontend on pushes and pull requests targeting `main`.
