FROM php:7.4-cli
COPY get_url_status.php /usr/src/myapp/
WORKDIR /usr/src/myapp
ENTRYPOINT ["php", "./get_url_status.php"]
CMD [ "www.example.com" ]
