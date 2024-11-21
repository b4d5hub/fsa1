<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

//authentification
$routes->get('/signup', function(){return view('pages/signup');});
$routes->post('auth/register', 'AuthController::register');
$routes->post('auth/delete', 'AuthController::delete');

$routes->get('/signin', function(){return view('pages/signin');});
$routes->post('auth/login', 'AuthController::login');
$routes->post('/auth/logout', 'AuthController::logout');

$routes->post('auth/changeEmail_pw', 'AuthController::changeEmail_pw');
$routes->post('auth/changeName', 'AuthController::changeName');
$routes->post('auth/changeCurrency', 'AuthController::changeCurrency');

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
$routes->post('transactions/update/(:num)', 'TransactionsController::updateTransaction/$1');

//analytics
$routes->get('/analytics', 'TransactionsController::statistics', ['filter' => 'auth']);
//$routes->get('/analytics', function(){return view('pages/analytics/index');}, ['filter' => 'auth']);
//$routes->get('/analytics-expenses', function(){return view('pages/analytics/expenses');}, ['filter' => 'auth']);
//$routes->get('/analytics-income', function(): string{return view('pages/analytics/income');}, ['filter' => 'auth']);
$routes->get('/analytics-transaction-history', 'TransactionsController::historique', ['filter' => 'auth']);
$routes->get('/income-expense-data', 'ChartController::getIncomeVsExpenseData');
$routes->get('/analytics-income',   'AnalyticsController::income', ['filter' => 'auth']);
$routes->get('/dataincome', 'ChartController::getIncomeData', ['filter' => 'auth']);
$routes->get('/analytics-expenses',   'AnalyticsController::expenses', ['filter' => 'auth']);
$routes->get('/dataexponses', 'ChartController::getExpensesData', ['filter' => 'auth']);//pour chart expenses
//profile
$routes->get('/profile', 'AuthController::profile', ['filter' => 'auth']);

//settings
$routes->get('/settings', 'AuthController::settings', ['filter' => 'auth']);
$routes->get('/settings-profile', 'AuthController::profilesettings', ['filter' => 'auth']);
$routes->get('/support', function(){return view('pages/support');}, ['filter' => 'auth']);




