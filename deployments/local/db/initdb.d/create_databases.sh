#!/bin/bash -eu

mysql=( mysql --protocol=socket -uroot -p"${MYSQL_ROOT_PASSWORD}" )

"${mysql[@]}" <<-EOSQL
    CREATE DATABASE IF NOT EXISTS es_editor_misc;
    GRANT ALL ON es_editor_misc.* TO '${MYSQL_USER}'@'%';
EOSQL
