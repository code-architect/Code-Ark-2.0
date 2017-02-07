<?php

return [
    'database' => [
        'dbname'        =>  'test_sub_project',
        'username'      =>  'root',
        'password'      =>  '',
        'connection'    =>  'mysql:host=localhost',
        'options'       =>  [
            PDO::ATTR_ERRMODE   =>   PDO::ERRMODE_EXCEPTION
        ]
    ]
];