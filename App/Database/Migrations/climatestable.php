<?php

return [
    // Name of the scheme
    'table_name' => 'climates',

    // Query to drop the scheme
    'drop_scheme' => "DROP TABLE IF EXISTS `climates`",

    // The scheme
    'scheme' => "CREATE TABLE IF NOT EXISTS `climates` (
        `id` int(11) NOT NULL AUTO_INCREMENT,

        `iso` varchar(1) NOT NULL,
        `climate` varchar(80) NOT NULL,
        `indutch` varchar(80) NOT NULL,
        `deleted` date,




        PRIMARY KEY (`id`)
    ) ENGINE=MyISAM  DEFAULT CHARSET=latin1;",

    // Seeder data goes here
    'seeder' => [
        'type' => 'sql',
        'data' => "INSERT INTO `climates` (`id`, `iso`, `climate`, `indutch`) VALUES
        (1, 'A', 'Tropical', 'Tropisch'),
        (2, 'B', 'Dry', 'Droog'),
        (3, 'C', 'Temperate', 'Gematigd'),
        (4, 'D', 'Continental', 'Land'),
        (5, 'E', 'polar', 'Pool');"
    ],
];