FROM php:7.1.31-alpine3.10

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN mkdir /app

WORKDIR /app

COPY . /app

CMD composer start

EXPOSE 8080