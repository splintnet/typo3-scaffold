###############################################################################
# Node JS
###############################################################################

FROM splintnet/alpine-node as nodejs
LABEL maintainer="info@splintnet.de"

WORKDIR /application

COPY packages/wfo/Build ./packages/wfo/Build
COPY packages/wfo/Resources/Public ./packages/wfo/Resources/Public

###############################################################################
# PHP
###############################################################################

FROM splintnet/alpine-php:latest as typo3
LABEL maintainer="info@splintnet.de"

RUN apk update && \
    apk upgrade -U && \
    apk add ca-certificates ffmpeg libwebp libwebp-tools openssh-client && \
    rm -rf /var/cache/*

WORKDIR /application

RUN mkdir ~/.ssh \
    && touch ~/.ssh/known_hosts \
    && ssh-keyscan bitbucket.org >> ~/.ssh/known_hosts

RUN mkdir -p \
    /application/var \
    /application/config \
    /application/public/fileadmin \
    /application/public/typo3temp \
    /application/public/uploads

COPY composer.json composer.lock ./
COPY packages/charter/composer.* ./packages/charter/
COPY packages/wfo/composer.* ./packages/wfo/

COPY docker/config/php.ini /usr/local/etc/php/conf.d/docker.ini

RUN chown -R www-data:www-data .
USER www-data
RUN composer install --no-scripts --no-autoloader --no-dev --quiet

COPY --chown=www-data:www-data . .
COPY --chown=www-data:www-data --from=nodejs \
    /application/packages/charter/Resources/Public/JavaScript/Dist \
    /application/packages/charter/Resources/Public/JavaScript/Dist

RUN composer dump-autoload

# Configure volumes
VOLUME /application/var
VOLUME /application/config
VOLUME /application/public/fileadmin
VOLUME /application/public/typo3temp
VOLUME /application/public/uploads


###############################################################################
# Nginx
###############################################################################

FROM nginx:alpine as nginx
LABEL maintainer="info@splintnet.de"

WORKDIR /application

COPY docker/config/nginx.conf /etc/nginx/conf.d/default.conf
COPY --chown=nginx:nginx --from=typo3 /application/packages /application/packages
COPY --chown=nginx:nginx --from=typo3 /application/public /application/public
