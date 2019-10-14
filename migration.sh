#!/bin/bash

cmd="docker-compose run migrate"
mysql="-database mysql://root:root@tcp(mysql:3306)/web_app_bootcamp -path /migrations"

if [ $# = 0 ]; then
  echo "引数に[create]か[up]を指定してください。"
  exit
fi

# Create migrations
if [ $1 = "create" ]; then
  if [ $# = 1 ]; then
    echo -e "[create]の場合はマイグレーション名を指定してください。\nex.) ./migration.sh create create_sample_table"
    exit
  fi

  cmd="${cmd} create -ext sql -dir /migrations -seq $2"
fi

# Run migrations
if [ $1 = "up" ]; then
  cmd="${cmd} ${mysql} up"
fi

if [ $1 = "down" ]; then
  cmd="${cmd} ${mysql} down"
fi


$cmd
