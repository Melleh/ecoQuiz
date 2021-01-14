<?php

return [
    // Name of the scheme
    'table_name' => 'foods',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `foods`",

    // The scheme
    'scheme' => "CREATE TABLE IF NOT EXISTS `foods` (
        `id` int(11) NOT NULL AUTO_INCREMENT,

        
        `food` varchar(80) NOT NULL,
        `indutch` varchar(80) NOT NULL,
        

        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1;",

    // Seeder data goes here
    'seeder' => [
        'type' => 'sql',
        'data' => "INSERT INTO `foods` (`id`, `food`, `indutch`) VALUES
        
        (1, 'Apple', 'Appel');"
        
    ],
];