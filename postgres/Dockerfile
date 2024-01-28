# Utiliser votre image custom PHP comme image de base
FROM bloodriver/php:v1.0

# Installer PostgreSQL
RUN apk add --no-cache postgresql postgresql-client

# Initialiser la base de données
RUN mkdir /run/postgresql && \
        chown -R postgres:postgres /run/postgresql && \
        su - postgres -c "initdb -D /var/lib/postgresql/data"

# Exposer les ports pour PHP et PostgreSQL
EXPOSE 9000 5432

# Créer un répertoire pour le code PHP
WORKDIR /var/www/html

# Copier les fichiers PHP du répertoire actuel vers le répertoire dans le conteneur
COPY . /var/www/html

# Commande pour démarrer PHP et PostgreSQL
CMD ["sh", "-c", "su - postgres -c 'pg_ctl start -D /var/lib/postgresql/data' && php-fpm7 -F"]
