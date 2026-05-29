# 1. On part d'une image de base qui contient déjà nodejs
FROM php:8.4-apache
# 2. On copie le code source public de notre application dans le conteneur
COPY . /var/www/html/
# 5. On ouvre le port 80 du container pour que les utilisateurs puissent accéder à l'application

RUN chmod  077 /var/www/html/photos/




EXPOSE 80
# 6. Pas de commande à exécuter pour lancer l'application car le serveur web est un démon qui tourne en continu, il se lance automatiquement lorsque le conteneur est lancé