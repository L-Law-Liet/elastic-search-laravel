FROM nginx
COPY conf/vhost.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www/elasticProject
