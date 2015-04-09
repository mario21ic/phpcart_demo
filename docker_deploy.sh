#!/bin/bash

IMG_PHP="mario21ic/apache2:php53"
IMG_DB="mysql:latest"
CONT_DB="mysqldb"
CONT_PHP="pdgcart"
PASS_DB="kokobongo"
DIR_SRC=$PWD"/src"
DB_DIR=$PWD"/data"
DB_NAME="pdgcart_db"

if [ -z $1 ]; then
    ACTION="start"
else
    ACTION=$1
fi


echo "Checking if containers "$CONT_DB" exists"
if [ ! -z $(docker ps -q -a -f name=$CONT_DB) ]
then
    echo $ACTION"ing container "$CONT_DB
    docker $ACTION $CONT_DB
else
    echo "Running container "$CONT_DB
    docker run -d -v $DB_DIR:/var/lib/mysql/$DB_NAME -p 3306:3306 --name=$CONT_DB -e MYSQL_ROOT_PASSWORD=$PASS_DB $IMG_DB
fi

echo "Checking if containers "$CONT_PHP" exists"
if [ ! -z $(docker ps -q -a -f name=$CONT_PHP) ]
then
    echo $ACTION"ing container "$CONT_PHP
    docker $ACTION $CONT_PHP
else
    echo "Running container "$CONT_PHP
    docker run --name $CONT_PHP --link $CONT_DB:mysql -d -p 80:80 -v $DIR_SRC:/var/www \
        -v $PWD/access.log:/var/log/apache2/access.log \
        -v $PWD/error.log:/var/log/apache2/error.log $IMG_PHP
fi

echo "Cleaning logs.."
echo "" > access.log
echo "" > error.log

echo "Logging..."
tail -f ./error.log
