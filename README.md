# Vagrant Setup

Follow these steps to get this application up and running with Vagrant. 

__1. Clone this repo and go into the `bcg_challenge/` directory:__

    git clone https://github.com/GabeHeath/bcg_challenge.git

    cd bcg_challenge

__2. Start Vagrant:__

     vagrant up

 - __Note:__ I set up NFS shared folders to speed up the site on Vagrant. It might ask you for your computer's password so it can mount them.


__3. SSH into the Vagrant box and go into the `/vagrant` directory:__

    vagrant ssh
	
    cd /vagrant

__4. Install cURL and php5-cURL__

    sudo apt-get install curl

    sudo apt-get install php5-curl

__5. Install Composer__

    curl -sS https://getcomposer.org/installer | php

__6. Update Composer__

    php composer.phar update

- __Note:__ When it prompts you to enter the `parameters.yml` settings, just hit _Enter_ to keep all setting default

__7. Create the database__
 
    php app/console doctrine:database:create

__8. Create the database schema__

    php app/console doctrine:schema:update --force

__9. Load data fixtures__

    php app/console doctrine:fixtures:load

__10. Log in__

Go to __33.33.33.33__ to log into the site. You can create a new user or use this pre-existing user.

    Username: BillA
    Password: password