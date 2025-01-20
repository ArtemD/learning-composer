# Use PHP 8.4.3 CLI image as the base image
FROM php:8.4.3-cli

# Copy all files from current directory into /app directory in container
COPY . /app

# Set the working directory to /app
WORKDIR /app

# Copy the Composer executable from the official Composer image to our container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Git and other dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Install production dependencies only and optimize the autoloader for better performance
RUN composer install --no-dev --optimize-autoloader

# Define the command to run when container starts - execute app.php with PHP
CMD [ "php", "app.php" ]
