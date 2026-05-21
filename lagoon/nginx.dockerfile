FROM uselagoon/nginx:latest

COPY /sites/ /sites
COPY lagoon/nginx/app.conf /etc/nginx/conf.d/app.conf
