# my_project
This is a symfony5.4 test project dev environment using a Docker repo.

Docker repo includes 4 Docker images that build 4 seperate docker containers:
Apache2/PHP8.1 
MYSQL8Server 
PHPMYADMIN
REDIS LAMP (REDIS NOT USED with this project)

Repo Docker build here:

https://github.com/yardpenalty/docker-compose-lamp.git

NOTES: 

MYSQL_ROOT_PASSWORD=tiger

/my_project/.env 

DATABASE_URL="mysql://root:tiger@127.0.0.1:3306/my_project?serverVersion=8&charset=utf8mb4"

May have to install xml pkg

   $ sudo apt install php-xml

TODOS: setup fixtures for seeding

