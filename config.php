<?php

//global configuration 

return [
    'database' => [
        'DATABASE_DRIVER' => 'mysql',
        'DATABASE_HOST' => '127.0.0.1',
        'DATABASE_NAME' => 'mytodo',
        'DATABASE_USERNAME' => 'ssulbaran',
        'DATABASE_PASSWORD' => '1SopadepollO',
        'DATABASE_OPTIONS' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]  
    ],
];