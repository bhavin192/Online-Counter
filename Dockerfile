FROM php:5.6-apache

LABEL maintainer="bhavin192@users.noreply.github.com"

WORKDIR /var/www/html
RUN apt-get update && apt-get install unzip
RUN curl -O -L -k https://github.com/bhavin192/online-counter/archive/master.zip 
RUN unzip master.zip 
RUN mv online-counter-master/* .
RUN rm -rf master.zip && rm -rf online-counter-master
RUN chown www-data do/count.txt
