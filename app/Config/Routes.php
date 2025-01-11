<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('customer', function (RouteCollection $routes) {
    $routes->get('get-data/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)', 'Customers::getCustomers/$1/$2/$3/$4/$5/$6');
    $routes->get('get-data/(:any)/(:any)/(:any)/(:any)/(:any)', 'Customers::getCustomers/$1/$2/$3/$4/$5');
});
