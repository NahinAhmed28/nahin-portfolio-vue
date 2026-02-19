#!/usr/bin/env bash
set -euo pipefail

PROJECT_ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$PROJECT_ROOT"

if [[ ! -f .env ]]; then
  echo ".env not found. Creating from .env.example..."
  cp .env.example .env
else
  echo ".env already exists."
fi

if [[ ! -f artisan ]]; then
  echo "artisan not found. Run this script from a Laravel project root."
  exit 1
fi

if ! command -v php >/dev/null 2>&1; then
  echo "PHP is not installed or not in PATH."
  exit 1
fi

echo "Clearing bootstrap/cache/*.php..."
find bootstrap/cache -maxdepth 1 -type f -name '*.php' -delete

if [[ -f vendor/autoload.php ]]; then
  echo "Clearing framework caches..."
  php artisan config:clear
  php artisan cache:clear
  php artisan route:clear
  php artisan view:clear
else
  echo "Skipping artisan cache clear commands until dependencies are installed."
fi

if grep -Eq '^APP_KEY=base64:' .env; then
  echo "APP_KEY already set in .env."
else
  echo "APP_KEY missing. Generating..."
  if [[ -f vendor/autoload.php ]]; then
    php artisan key:generate --force
  else
    GENERATED_KEY="$(php -r 'echo "base64:".base64_encode(random_bytes(32));')"
    if grep -Eq '^APP_KEY=' .env; then
      sed -i "s#^APP_KEY=.*#APP_KEY=${GENERATED_KEY}#" .env
    else
      echo "APP_KEY=${GENERATED_KEY}" >> .env
    fi
  fi
fi

echo "Laravel cleanup completed."
