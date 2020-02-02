FROM ruby:2.5-alpine
LABEL maintainer=MasanoriIwakura

RUN apk add --no-cache build-base libxml2-dev libxslt-dev mariadb-dev

ENV APP_BASE_PATH=/var/www/bootcamp

WORKDIR $APP_BASE_PATH
COPY ./bootcamp ./
RUN bundle install --path vendor/bundle

CMD ["bundle", "exec", "rails", "s", "-p", "3000", "-b", "0.0.0.0"]