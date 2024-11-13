<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

//authentification
$routes->get('/signin', function(){return view('pages/signin');});
$routes->post('auth/login', 'AuthController::login');
$routes->post('/auth/logout', 'AuthController::logout');


$routes->get('/signup', function(){return view('pages/signup');});
$routes->post('auth/register', 'AuthController::register');

$routes->get('/reset', function(){return view('pages/reset');});


//dashboard
$routes->get('/dashboard', function(){return view('pages/dashboard');}, ['filter' => 'auth']);

//budget
$routes->get('budget', 'BudgetController::index', ['filter' => 'auth']);
$routes->post('/budget/set', 'BudgetController::setbudget', ['filter' => 'auth']);


//categories
$routes->get('/categories', 'CategoriesController::index', ['filter' => 'auth']);
$routes->post('/categories/add', 'CategoriesController::submit', ['filter' => 'auth']);
$routes->post('/categories/delete/(:num)', 'CategoriesController::deleteCategory/$1', ['filter' => 'auth']);

//expenses
$routes->get('/expenses', 'TransactionsController::index', ['filter' => 'auth']);
$routes->post('/transactions/add', 'TransactionsController::addTransaction', ['filter' => 'auth']);
$routes->post('/transactions/delete/(:num)', 'TransactionsController::deleteTransaction/$1', ['filter' => 'auth']);

//analytics
$routes->get('/analytics', function(){return view('pages/analytics/index');}, ['filter' => 'auth']);
$routes->get('/analytics-expenses', function(){return view('pages/analytics/expenses');}, ['filter' => 'auth']);
$routes->get('/analytics-income', function(){return view('pages/analytics/income');}, ['filter' => 'auth']);
$routes->get('/analytics-transaction-history', function(){return view('pages/analytics/transaction-history');}, ['filter' => 'auth']);

//profile
$routes->get('/profile', 'AuthController::profile', ['filter' => 'auth']);

//settings
$routes->get('/settings', 'AuthController::settings', ['filter' => 'auth']);
$routes->get('/settings-profile', function(){return view('pages/settings/profile');}, ['filter' => 'auth']);
$routes->get('/support', function(){return view('pages/support');}, ['filter' => 'auth']);




