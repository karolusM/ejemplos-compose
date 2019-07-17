FROM debian

# Despues de instalar apache, borramos la caché de paquetes apt y la lista de paquetes descargada,
RUN apt-get update && apt-get install -y apache2 && apt-get clean && rm -rf /var/lib/apt/lists/*

# creamos varias variables de entorno (en este ejemplo no se van a utilizar…)
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

# exponemos el puerto http TCP/80
EXPOSE 80


#Se establece el directorio /var/www/html como un volumen
VOLUME /var/www/html

# indicamos el comando que se va a ejecutar al crear el contenedor, y además, al usar el comando ENTRYPOINT, 
# no permitimos ejecutar ningún otro comando durante la creación.

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
