# Dockerfile
FROM ubuntu:latest
MAINTAINER Steve Buchanan <sbuchanan@buchatech.com>
ENV DEBIAN_FRONTEND noninteractive
# Install Core Components
RUN apt-get update
RUN apt-get -y install curl
RUN apt-get install -y software-properties-common && \
add-apt-repository ppa:ondrej/php && apt-get update
RUN apt-get install -y vim
# Install PHP 5.6
RUN apt-get install -y php5.6 php5.6-mysql php5.6-mcrypt php5.6-cli php5.6-gd php5.6-curl php5.6-xml php5.6-mbstring php5.6-sqlite
# Enable apache mods
RUN a2enmod php5.6
RUN a2enmod rewrite
# Apache environment variables
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid
# Expose ports on Apache
EXPOSE 80
EXPOSE 8080
EXPOSE 443
# Override the default apache site 000-default.conf file with our configuration
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
# Override the default apache2.conf file with our configuration
COPY apache2.conf /etc/apache2/apache2.conf
# Copy the samsoncz folder into the DocumentRoot directory var
COPY exerciseoftheday /var/www/html/exerciseoftheday
# Copy the phpinfo.php into the DocumentRoot directory
COPY phpinfo.php /var/www/html
# By default start up apache in the foreground, override with /bin/bash for interative.
CMD /usr/sbin/apache2ctl -D FOREGROUND
# Set working directory for exerciseoftheday
WORKDIR /var/www/html/exerciseoftheday
