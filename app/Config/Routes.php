<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('customer', function (RouteCollection $routes) {
    $routes->add('get-data/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)', 'Customers::getCustomers/$1/$2/$3/$4/$5/$6');
    $routes->add('get-data/(:any)/(:any)/(:any)/(:any)/(:any)', 'Customers::getCustomers/$1/$2/$3/$4/$5');
    // $routes->add('get-customer', 'Customers::getCustomersUsingHeaders');
    $routes->add('get-customer/(:any)', 'Customers::getCustomersUsingHeaders/$1');
    $routes->add('get-customer/(:any)/(:any)', 'Customers::getCustomersUsingHeaders/$1/$2');
});
