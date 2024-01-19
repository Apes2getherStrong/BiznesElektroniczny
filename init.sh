#!/bin/bash
MYSQL_HOST="db"
MYSQL_PORT="3306"
MYSQL_USER="root"
MYSQL_PASSWORD="student"
MYSQL_DATABASE="BE_188889"
SQL_DUMP_FILE="/dump.sql"
mysql -h"$MYSQL_HOST" -P"$MYSQL_PORT" -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" -e "CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};"
mysql -h"$MYSQL_HOST" -P"$MYSQL_PORT" -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" "$MYSQL_DATABASE" < "$SQL_DUMP_FILE"

if [ -d "install" ]; then
    rm -rf install
fi

if [ -d "config" ]; then
    rm -rf config
fi


exec apache2-foreground
