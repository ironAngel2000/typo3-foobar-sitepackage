#!/bin/bash

docker exec -it `docker ps | grep mysql | cut -f 1 -d " " | grep -v CONTAINER | tr "\n" " "` mysql -uroot -p
