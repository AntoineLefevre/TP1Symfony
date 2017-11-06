<?php
/**
 * Auteur: F. Hémery 07/09/2017 19:37
 *
 */
// App configuration
/*$dbParams = [
    'driver' => 'pdo_sqlite',
    'path' => __DIR__.'/../data/tp.db'
];*/

$dbParams = [
    'driver' => 'pdo_mysql',
    'host' => 'ipabdd.iut-lens.univ-artois.fr',
    'dbname' => 'antoinelefevre',
    'user' => 'antoine.lefevre',
    'password' => '6ZOQ1nDM'
];
// Dev mode?
$dev = true;


$entityPath = array(__DIR__.'/../src/Entity');