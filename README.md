# posts
sistema basico de posts com laravel 5.5

Configuração baseada em S.O Linux

    Distribuição Ubuntu 16.04 LTS 64-bit
     

Requisitos

PHP >= 7.0

    -OpenSSL PHP Extension
    -PDO PHP Extension
    -Mbstring PHP Extension
    -Tokenizer PHP Extension
    -XML PHP Extension
    
MySql >= 5.7

Apache

Composer 

Git

Inicio
    
    git clone https://github.com/grsalmeida/posts.git
    composer update
    chmod -Rf 777 /bootstrap/cache 
    chmod -Rf 777 /storage
    php artisan key:generate
    
    DB    
        create database posts in DB
        php artisan migrate  
    
    Config Apache
        sudo nano /etc/apache2/sites-available/posts        
            <VirtualHost 127.0.0.2:80>
                    ServerName posts
                    ServerAlias www.posts.com.br
                    DocumentRoot /var/www/posts/public/
                    ErrorLog ${APACHE_LOG_DIR}/error.log
                    #CustomLog ${APACHE_LOG_DIR}/access.log
                    <Directory /var/www/posts/public/>
                        Options Indexes FollowSymLinks
                        AllowOverride All
                        Require all granted
                    </Directory>
            </VirtualHost>
       
        sudo ln -s /etc/apache2/sites-available/posts.conf /etc/apache2/sites-enabled/posts.con
        
        sudo nano /etc/hosts
            127.0.0.2 posts.com.br
        
        sudo service apache2 restart
        
OR
    Executar o script setup.php via linha de comando
      
        