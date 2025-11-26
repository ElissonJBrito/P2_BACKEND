#!/bin/sh
set -e

# Copia os arquivos internos da imagem para o volume apenas se o diretório alvo estiver vazio
if [ -d /var/www/html ] && [ -z "$(ls -A /var/www/html 2>/dev/null)" ]; then
  echo "Populando /var/www/html com os arquivos internos da imagem..."
  mkdir -p /var/www/html
  cp -a /opt/app_src/. /var/www/html/
  if command -v chown >/dev/null 2>&1; then
    chown -R www-data:www-data /var/www/html || true
  fi
fi

# executar o comando padrão do container
exec "$@"
