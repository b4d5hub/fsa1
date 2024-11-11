<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

//authentification
$routes->get('/signin', function(){return view('pages/signin');});
$routes->post('auth/login', 'AuthController::login');

$routes->get('/signup', function(){return view('pages/signup');});
$routes->post('auth/register', 'AuthController::register');

$routes->get('/reset', function(){return view('pages/reset');});


//dashboard
$routes->get('/dashboard', function(){return view('pages/dashboard');});

//budget
$routes->get('budget', 'BudgetController::index');
$routes->post('/budget/set', 'BudgetController::setbudget');


//categories
$routes->get('/categories', 'CategoriesController::index');
$routes->post('/categories/add', 'CategoriesController::submit');
$routes->post('/categories/delete/(:num)', 'CategoriesController::deleteCategory/$1');

//expenses
$routes->get('/expenses', 'TransactionsController::index');
$routes->post('/transactions/add', 'TransactionsController::addTransaction');
$routes->post('/transactions/delete/(:num)', 'TransactionsController::deleteTransaction/$1');

//analytics
$routes->get('/analytics', function(){return view('pages/analytics/index');});
$routes->get('/analytics-expenses', function(){return view('pages/analytics/expenses');});
$routes->get('/analytics-income', function(){return view('pages/analytics/income');});
$routes->get('/analytics-transaction-history', function(){return view('pages/analytics/transaction-history');});

//profile
$routes->get('/profile', 'AuthController::profile');

//settings
$routes->get('/settings', 'AuthController::settings');
$routes->get('/settings-profile', function(){return view('pages/settings/profile');});
$routes->get('/support', function(){return view('pages/support');});




