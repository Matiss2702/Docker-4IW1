FROM alpine
#update and upgrade the system
RUN apk update && apk upgrade
#install apache2
RUN apk add apache2
#install php (adminer is just a php file so we need to install php) (php-pgsql is needed for postgresql)
RUN apk add php
RUN apk add php-apache2 
RUN apk add php-session
RUN apk add php-pgsql

#copy the adminer file to the container
RUN mkdir -p /var/www/localhost/htdocs/adminer
COPY  ./adminer.php /var/www/localhost/htdocs/adminer/index.php
#create a log folder for adminer
RUN mkdir -p /var/log/adminer/
#copy the adminer.conf file to the container according to the adminer.conf file
COPY ./adminer.conf /etc/apache2/conf.d/adminer.conf

#expose port 80 (apache uses port 80 by default)
EXPOSE 80

#start server web
CMD ["httpd", "-D", "FOREGROUND"]