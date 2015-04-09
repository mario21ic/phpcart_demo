.IGNORE: pull

all: compile

ci: pull compile

pull:
	docker pull ubuntu:12.04

compile:
	docker build -t mario21ic/apache2:php53 .
