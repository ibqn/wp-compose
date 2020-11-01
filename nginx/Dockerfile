FROM nginx:alpine

RUN apk add inotify-tools certbot

COPY certbot.sh /docker-entrypoint.d/

RUN chmod +x /docker-entrypoint.d/certbot.sh
