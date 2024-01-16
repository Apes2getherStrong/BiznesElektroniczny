#!/bin/bash

IMAGE_NAME="janek1010/be_188889:latest"
COMPOSE_URL="https://raw.githubusercontent.com/Apes2getherStrong/BiznesElektroniczny/dump/scripts/docker-compose.yml"
STACK_NAME="BE_188889"

echo "Downloading docker image and docker-compose file"
docker pull $IMAGE_NAME
wget $COMPOSE_URL -O docker-compose.yml

echo "Deploying app"
docker stack deploy -c docker-compose.yml $STACK_NAME --with-registry-auth

