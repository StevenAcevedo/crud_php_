<?php



    
    define('DB_HOST', 'localhost');
    define("DB_USER", "root");
    define('DB_PASS', 'Mysql.777');
    define('DB_NAME', 'crud_php');
    //Establecer la Conexión

    try {
        $coon = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
        
      
    } catch (PDOException $e) {

        exit("Error: " . $e->getMessage());
    }


    ?>