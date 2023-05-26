#!/bin/bash

docker exec -it `docker ps | grep php | cut -f 1 -d " " | grep -v CONTAINER | tr "\n" " "` bash
