# Usar una imagen base de PHP con Apache
FROM php:7.4-apache

# Instalar dependencias necesarias y extensiones de PHP
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip mysqli pdo_mysql

# Habilitar módulos de Apache necesarios
RUN a2enmod rewrite

# Copiar los archivos de la aplicación al directorio de trabajo en el contenedor
COPY . /var/www/html

# Establecer permisos correctos para los archivos (opcional, solo si es necesario)
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80 para HTTP
EXPOSE 85

# Comando para iniciar Apache en primer plano
CMD ["apache2-foreground"]