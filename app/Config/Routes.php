<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

//authentification
$routes->get('/signup', 'AuthController::signup');
$routes->post('auth/register', 'AuthController::register');
$routes->post('auth/delete', 'AuthController::delete');

$routes->get('/signin', 'AuthController::signin');
$routes->post('auth/login', 'AuthController::login');
$routes->post('/auth/logout', 'AuthController::logout');

$routes->post('auth/changeEmail_pw', 'AuthController::changeEmail_pw');
$routes->post('auth/changeName', 'AuthController::changeName');
$routes->post('auth/changeCurrency', 'AuthController::changeCurrency');

$routes->get('/reset', function () {
    return view('pages/reset');
});


//dashboard
$routes->get('/dashboard', 'DashboardController::index', ['filter' => 'auth']);
$routes->get('/balance-trends', 'DashboardController::getBalanceTrends');


//budget
$routes->get('budget', 'BudgetController::index', ['filter' => 'auth']);
$routes->post('/budget/set', 'BudgetController::setbudget', ['filter' => 'auth']);



//categories
$routes->get('/categories', 'CategoriesController::index', ['filter' => 'auth']);
$routes->post('/categories/add', 'CategoriesController::submit', ['filter' => 'auth']);
$routes->post('/categories/delete/(:num)', 'CategoriesController::deleteCategory/$1', ['filter' => 'auth']);

//expenses
$routes->get('/transactions', 'TransactionsController::index', ['filter' => 'auth']);
$routes->post('/transactions/add', 'TransactionsController::addTransaction', ['filter' => 'auth']);
$routes->post('/transactions/export', 'TransactionsController::exportall', ['filter' => 'auth']);
$routes->post('/transactions/exportincome', 'TransactionsController::exportincome', ['filter' => 'auth']);
$routes->post('/transactions/exportexpenses', 'TransactionsController::exportexpenses', ['filter' => 'auth']);
$routes->post('/transactions/delete/(:num)', 'TransactionsController::deleteTransaction/$1', ['filter' => 'auth']);
$routes->post('transactions/update/(:num)', 'TransactionsController::updateTransaction/$1');


//analytics
$routes->get('/analytics', 'TransactionsController::statistics', ['filter' => 'auth']);
$routes->get('/analytics-income',   'AnalyticsController::income', ['filter' => 'auth']);
$routes->get('/analytics-expenses',   'AnalyticsController::expenses', ['filter' => 'auth']);
$routes->get('/analytics-transaction-history', 'TransactionsController::historique', ['filter' => 'auth']);
$routes->get('/income-expense-data', 'ChartController::getIncomeVsExpenseData');
$routes->get('/dataincome', 'ChartController::getIncomeData', ['filter' => 'auth']);
$routes->get('/dataexponses', 'ChartController::getExpensesData', ['filter' => 'auth']); //pour chart expenses
$routes->get('/transactionData', 'ChartController::getTransactionDataforAreaChart', ['filter' => 'auth']);


//profile
$routes->get('/profile', 'AuthController::profile', ['filter' => 'auth']);

//settings
$routes->get('/settings', 'AuthController::settings', ['filter' => 'auth']);
$routes->get('/settings-profile', 'AuthController::profilesettings', ['filter' => 'auth']);
$routes->post('/submit-reclamation', 'Reclamation::submit', );
