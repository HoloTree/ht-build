# Init script for VVV Auto Bootstrap Demo 2

echo "Commencing HoloTree VVV"

# Make a database, if we don't already have one
echo "Creating database (if it's not already there)"
mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS htdev"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON htdev.* TO wp@localhost IDENTIFIED BY 'wp';"

# Run Composer
composer install --prefer-dist


# The Vagrant site setup script will restart Nginx for us

echo "VVV HoloTree is now installed, hopefully";
