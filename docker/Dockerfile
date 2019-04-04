#
# Build dockerfile which includes latest version of current repo.
#

#
# Use something as base image
#
FROM debian:stretch-slim



#
# Get needed base tools in Debian
#
RUN apt-get update && apt-get install -y --no-install-recommends \
        apache2 \
        apt-transport-https \
        ca-certificates \
        git             \
        gnupg           \
        lsb-release     \
        lsof            \
        lynx            \
        make            \
        rsync           \
        wget            \
        unzip           \
    && wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg \
    && echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" | tee /etc/apt/sources.list.d/php.list \
    && apt-get update && apt-get install -y --no-install-recommends \
        libapache2-mod-php7.3 \
        php7.3-cli \
        php7.3-gd \
        php7.3-opcache \
        php7.3-mbstring \
        php7.3-mysql \
        php7.3-sqlite3 \
        php7.3-xml \
        php7.3-zip \
    && rm -rf /var/lib/apt/lists/* \
    && a2enmod rewrite \
    && a2dismod mpm_event \
    && a2enmod mpm_prefork



#
# Show PHP startup errors.
#
ARG path=/etc/php/7.3
RUN if [ -d /etc/php/7.3/apache2 ]; then echo 'display_errors = on' > $path/apache2/conf.d/20-display_errors.ini; fi \
	&& if [ -d /etc/php/7.3/cli ]; then echo 'display_errors = on' > $path/cli/conf.d/20-display_errors.ini; fi



#
# Add composer
#
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer



#
# Make workdir where to store the files
#
ARG localUser=dbwebb
ARG workdir=/home/$localUser/repo
RUN useradd --create-home --shell /bin/bash $localUser \
	&& mkdir -p $workdir \
	&& chown $localUser $workdir
WORKDIR $workdir



#
# Add defult configuration for Git
#
USER dbwebb
RUN git config --global user.email "you@example.com" \
    && git config --global user.name "Your Name"



#
# Clone and setup repo
#
RUN git clone https://github.com/SECHAC/sechat-website.git ../repo \
    && composer install --no-dev \
    && composer clearcache \
    && mkdir log \
    && chmod 777 cache/* log \
    && rm -rf \
        .git \
        vendor/mos/cimage/{docs,webroot} \
        vendor/anax/*/doc 


#
# Start Apache
#
USER root
COPY apache.conf /etc/apache2/sites-available/000-default.conf
CMD ["apachectl", "-D FOREGROUND"]
