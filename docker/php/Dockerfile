FROM php:7.4.23-fpm-alpine3.13 as base

ENV WORK_DIR /var/www/my_first_service

FROM base

COPY . ${WORK_DIR}

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]