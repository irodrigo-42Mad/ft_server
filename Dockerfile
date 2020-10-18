#los dos puntos seleccionan imagen
FROM debian:buster

#UPDATE SYSTEM
RUN apt-get update -y

#&& /*apt-get upgrade*/ -y

#INSTALLING PHP COMPONENTS
RUN apt-get -y install php7.3-fpm php7.3-common php7.3-mysql php7.3-gmp php7.3-curl php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-gd php7.3-xml php7.3-cli php7.3-zip php7.3-soap php7.3-imap

#INSTALLING MYSQL
RUN apt-get -y install mariadb-server

#INSTALLING NGINX
RUN apt-get -y install nginx

#INSTALLING WGET
RUN apt-get -y install wget
RUN apt-get -y install openssl

#EXPOSING PORTS
EXPOSE 80 443

#EXEC CONFIG INSTRUCTIONS
COPY ./srcs/ ./srcs/
CMD bash ./srcs/cosa.sh
