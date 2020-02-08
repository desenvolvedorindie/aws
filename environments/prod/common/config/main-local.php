<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=awscurso.ccdslczvlhfu.us-east-1.rds.amazonaws.com;dbname=yii2advanced',
            'username' => 'admin',
            'password' => 'awscurso',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
