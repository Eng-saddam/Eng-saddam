<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

//$routes->add("test3",function (){return "1";});
//$routes->add("test4/(:any)/","test::test2/$1");
//$routes->add("test10/","test9::index");


$routes->add("signup","user::signup");
$routes->add("login","user::Login");
$routes->get('logout', 'user::logout');


$routes->group("Admin",function($routes){
	$routes->add("categories","cats::index");
	$routes->add("addcat","cats::addcat");
	$routes->add("catdelete/(:num)","cats::delete/$1");
	$routes->add("catedit/(:num)","cats::edit/$1");

	$routes->add("Settings","settings::general");
	$routes->add("Settings/SocialMedia","settings::socialMedia");
	$routes->add("Settings/Product","settings::product_settings");
	$routes->add("Dashboard","dashboard::index");
	$routes->add("UserSettings","userSettings::userSettings");
	$routes->add("myClients","myClients::myClients");
	$routes->add("administrativeUsers","administrativeUsers::administrativeUsers");
	$routes->add("Settings/otherOptions","settings::other_options");
	$routes->add("Settings/addnewoption","settings::add_new_option");

	$routes->add("Orders/today","orders::today_order");
	$routes->add("Orders/allOrders","orders::all_order");
	$routes->add("Orders/deliveryOrders","orders::delivery_order");
	$routes->add("Orders/canceledOrders","orders::canceled_order");


	$routes->add("Subcat/(:num)","cats::getsubcat/$1");

	$routes->add("/","dashboard::index");
	$routes->add("products","products::Products");
	$routes->add("addproduct","products::addproduct");
	$routes->add("productdelete/(:num)","products::delete/$1");
	$routes->add("productedit/(:num)","products::edit/$1");
	//$routes->get("news/add","admin::add");
//	$routes->post("news/add_post","admin::add_post");
});


// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'shop::index');
$routes->get('category/(:num)', 'shop::category/$1');
$routes->get('Product/(:num)', 'shop::Product/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
