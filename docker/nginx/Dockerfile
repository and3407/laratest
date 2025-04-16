FROM nginx:stable-alpine

WORKDIR /var/www/html

COPY docker/nginx/conf.d/nginx.conf /etc/nginx/conf.d/nginx.conf

COPY . .

CMD ["nginx", "-g", "daemon off;"]
