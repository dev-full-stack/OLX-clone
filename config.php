<?php
    define('ENVIRONMENT', 'development');

    global $config;
    $config = array();

    if(ENVIRONMENT == 'development'){
        define("BASE_URL", 'http://localhost');
        $config['dbname'] = 'olx_clone';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    }else{
        define("BASE_URL", 'http://localhost');
        $config['dbname'] = 'olx_clone';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    }
?>