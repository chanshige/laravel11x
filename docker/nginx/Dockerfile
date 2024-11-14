FROM nginxinc/nginx-unprivileged:alpine
LABEL maintainer="dev@shigeki.tokyo"

COPY ./docker/nginx/nginx.conf /etc/nginx/
COPY ./docker/nginx/default.conf /etc/nginx/conf.d/

EXPOSE 8080
