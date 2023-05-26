#!/bin/bash

cd ../
docker-compose stop
docker-compose -f ../docker-compose.yml up -d

