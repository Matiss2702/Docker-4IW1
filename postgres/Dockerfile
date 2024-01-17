FROM alpine

RUN apk update && apk add postgresql

RUN mkdir /run/postgresql && chown postgres:postgres /run/postgresql/
RUN mkdir -p /var/lib/postgresql/data && chown -R postgres:postgres /var/lib/postgresql/data


USER postgres
RUN initdb -D /var/lib/postgresql/data

RUN echo "host all all 0.0.0.0/0 md5" >> /var/lib/postgresql/data/pg_hba.conf
RUN echo "listen_addresses='*'" >> /var/lib/postgresql/data/postgresql.conf

EXPOSE 5432

CMD ["postgres", "-D", "/var/lib/postgresql/data", "-c", "config_file=/var/lib/postgresql/data/postgresql.conf"]