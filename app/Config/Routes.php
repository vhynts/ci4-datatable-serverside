<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Master
// $routes->setDefaultController('MasterController');
$routes->get('item', 'MasterController::index');
$routes->get('ajax-masteritem', 'MasterController::ajaxMasterItem');
$routes->get('item-detail', 'MasterController::item_detail');


//Purchases
$routes->get('purchase-list', 'PurchaseController::index');
$routes->get('ajax-purchaselist', 'PurchaseController::ajaxPurchaseList');
