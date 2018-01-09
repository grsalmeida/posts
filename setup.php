<?php 
    system("git clone https://github.com/grsalmeida/posts.git");
    //sleep(35);
    echo "composer: " . shell_exec('cd posts; composer update --no-interaction --no-dev --prefer-dist 2>&1');
    //shell_exec("cd posts/");
    //shell_exec("composer update");
    //sleep(35);
    PHP_EOL;
    echo"cache: ". system("cd posts; sudo chmod -Rf 777 /bootstrap/cache ");
    PHP_EOL;
    echo"storage: ". system("cd posts; sudo chmod -Rf 777 /storage");
    PHP_EOL;
    echo"key: ". system("cd posts; php artisan key:generate");
    //DB    
    $cmd = escapeshellcmd("mysql -u root -p -e 'create database posts'");
    shell_exec($cmd);
       
       
        system("cd posts; php artisan migrate");
    
    //Config Apache
       // system("echo '<VirtualHost 127.0.0.2:80> ServerName posts ServerAlias www.posts.com.br DocumentRoot /var/www/posts/public/ <Directory /var/www/posts/public/> Options Indexes FollowSymLinks AllowOverride All Require all granted </Directory> </VirtualHost>' > sudo /etc/apache2/sites-available/posts.conf");
       
       
      //  system("sudo ln -s /etc/apache2/sites-available/posts.conf /etc/apache2/sites-enabled/posts.conf");
        
        //system("echo 127.0.0.2 posts.com.br >> sudo /etc/hosts");
        
        system("sudo service apache2 restart");
?>