<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', function(){return view('pages/dashboard');});
$routes->get('/signin', function(){return view('pages/signin');});
$routes->get('/signup', function(){return view('pages/signup');});
$routes->get('/reset', function(){return view('pages/reset');});
$routes->get('/categories', function(){return view('pages/categories');});
// $routes->get('/budget', function(){return view('pages/budget');});
$routes->get('budget', 'BudgetController::index');
$routes->post('submit-category', 'CategoriesController::submit');
$routes->get('/budget2', function(){return view('pages/budget2');});
$routes->get('/expenses', function(){return view('pages/expenses');});
$routes->get('/wallets', function(){return view('pages/wallets');});
$routes->get('/budgets', function(){return view('pages/budgets');});
$routes->get('/goals', function(){return view('pages/goals');});
$routes->get('/profile', function(){return view('pages/profile');});
$routes->get('/analytics', function(){return view('pages/analytics/index');});
$routes->get('/analytics-expenses', function(){return view('pages/analytics/expenses');});
$routes->get('/analytics-income', function(){return view('pages/analytics/income');});
$routes->get('/analytics-income-vs-expenses', function(){return view('pages/analytics/income-vs-expenses');});
$routes->get('/analytics-balance', function(){return view('pages/analytics/balance');});
$routes->get('/analytics-transaction-history', function(){return view('pages/analytics/transaction-history');});
$routes->get('/settings', function(){return view('pages/settings/index');});
// $routes->get('/settings-general', function(){return view('pages/settings/general');});
$routes->get('/settings-profile', function(){return view('pages/settings/profile');});
$routes->get('/settings-categories', function(){return view('pages/settings/categories');});
$routes->get('/support', function(){return view('pages/support');});
$routes->get('/affiliates', function(){return view('pages/affiliates');});

