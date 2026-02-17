#!/bin/bash
set -e

# Fix permissions for Laravel storage & cache when using a mounted volume (e.g. CapRover)
# Web server runs as www-data; volume may be owned by root
if [ -d /production/portfoliov2/storage ]; then
    chown -R www-data:www-data /production/portfoliov2/storage
    chmod -R 775 /production/portfoliov2/storage
fi
if [ -d /production/portfoliov2/bootstrap/cache ]; then
    chown -R www-data:www-data /production/portfoliov2/bootstrap/cache
    chmod -R 775 /production/portfoliov2/bootstrap/cache
fi

exec "$@"
