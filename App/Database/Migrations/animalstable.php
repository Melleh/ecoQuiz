<?php

return [
    // Name of the scheme
    'table_name' => 'animals',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `animals`",

    // The scheme
    'scheme' => "CREATE TABLE IF NOT EXISTS `animals` (
        `id` int(11) NOT NULL AUTO_INCREMENT,

        
        `animal` varchar(80) NOT NULL,
        `indutch` varchar(80) NOT NULL,

        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1;",

    // Seeder data goes here
    'seeder' => [
        'type' => 'sql',
        'data' => "INSERT INTO `animals` (`id`, `animal`, `indutch`) VALUES
        
        (1, 'Giraff', 'Giraf');"

    ],
];