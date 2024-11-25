<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-4">
                            <div class="page-title-content">
                                <h3>Dashboard</h3>
                                <p class="mb-2">Welcome TrackWise Finance Management</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="breadcrumbs"><a href="#">Home </a>
                                <span><i class="fi fi-rr-angle-small-right"></i></span>
                                <a href="#">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="stat-widget-1">
                    <h6>Total Balance</h6>
                    <h3 class="<?= $totalbalance < 0 ? 'text-danger' : 'text-success' ?>">
                        <?= esc($user['currency']) . " " . esc(number_format($totalbalance, 2)) ?>
                    </h3>
                    <p>
                        <span class="<?= $incomePercentage < 0 ? 'text-danger' : 'text-success' ?>">
                            <i class="fi <?= $incomePercentage < 0 ? 'fi-rr-arrow-trend-down' : 'fi-rr-arrow-trend-up' ?>"></i><?= esc(number_format(abs($balancePercentage), 2)) ?>%
                        </span>
                        Last month <strong><?= esc($user['currency']) . " " . esc(number_format($lastMonthBalance, 2)) ?></strong>
                    </p>
                </div>
            </div>
            <!-- <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="stat-widget-1">
                            <h6>Total Period Change</h6>
                            <h3>$ 245860</h3>
                            <p>
                                <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                                Last month <strong>$24,478</strong>
                            </p>
                        </div>
                    </div> -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="stat-widget-1">
                    <h6>Total Period Expenses</h6>
                    <h3><?= esc($user['currency']) . " " . esc(number_format($userexpenses, 2)) ?></h3>
                    <p>
                        <span class="<?= $expensePercentage < 0 ? 'text-danger' : 'text-success' ?>">
                            <i class="fi <?= $expensePercentage < 0 ? 'fi-rr-arrow-trend-down' : 'fi-rr-arrow-trend-up' ?>"></i><?= esc(number_format(abs($expensePercentage), 2)) ?>%
                        </span>
                        Last month <strong><?= esc($user['currency']) . " " . esc(number_format($lastMonthExpenses, 2)) ?></strong>
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                <div class="stat-widget-1">
                    <h6>Total Period Income</h6>
                    <h3><?= esc($user['currency']) . " " . esc(number_format($userincome, 2)) ?></h3>
                    <p>
                        <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i><?= esc(number_format(abs($incomePercentage - $expensePercentage), 2)) ?>%
                        </span>
                        Last month <strong><?= esc($user['currency']) . " " . esc(number_format($lastMonthIncome, 2)) ?></strong>
                    </p>
                </div>
            </div>
            <!-- add expense -->
            <!-- <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                        <div class="stat-widget-1">
                        <h6>New Expense</h6>
                                        <div class="buy-sell-widget">
                                            <form method="post" name="myform" class="currency_validate">
                                                <div class="mb-1 mt-3">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text"><i class="fi fi-rr-credit-card"></i>
                                                            </label>
                                                        </div>
                                                        <select class="form-select" name="method">
                                                            <option>Category</option>
                                                            <option value="bank">Travel
                                                            </option>
                                                            <option value="master">Grocery
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="input-group">
                                                        <input type="text" name="currency_amount" class="form-control" placeholder="32 MAD">
                                                        <button type="submit" name="submit" class="btn btn-success btn-block">Add</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                        </div>
                    </div> -->
        </div>
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-header balance-trend">
                        <h4 class="card-title">Balance Trends <br> <span>$221,478</span></h4>
                        <div class="trend-stats">
                            <p class="mb-0">Last Month</p>
                            <span class="text-success">
                                <i class="fi fi-rr-arrow-trend-up"></i>
                                12.25%
                            </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="profileWallet"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Monthly Budgets</h4>
                    </div>
                    <div class="card-body">
                        <div class="budget-content">
                            <ul>
                                <li>
                                    <div class="budget-info flex-grow-2 me-3">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h5 class="mb-1"><i class="bg-green-500 fi fi-rr-carrot"></i>Grocery
                                                Stores</h5>
                                            <p class="mb-0"><strong>75 </strong>/ 100</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-green-500" role="progressbar"
                                                style="width: 75%;">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="budget-info flex-grow-2 me-3">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h5 class="mb-1"><i
                                                    class="bg-cyan-500 fi fi-rr-bus"></i>Transportation
                                            </h5>
                                            <p class="mb-0"><strong>25 </strong>/ 100</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-cyan-500" role="progressbar"
                                                style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="budget-info flex-grow-2 me-3">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h5 class="mb-1"><i class="bg-sky-500 fi fi-sr-cat"></i>Pets</h5>
                                            <p class="mb-0"><strong>50 </strong>/ 100</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-sky-500" role="progressbar"
                                                style="width: 50%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="budget-info flex-grow-2 me-3">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h5 class="mb-1"><i
                                                    class="bg-indigo-500 fi fi-rr-graduation-cap"></i>Education
                                            </h5>
                                            <p class="mb-0"><strong>45 </strong>/ 100</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-indigo-500" role="progressbar"
                                                style="width: 45%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="budget-info flex-grow-2 me-3">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h5 class="mb-1"><i
                                                    class="bg-violet-500 fi fi-rr-shirt-long-sleeve"></i>Clothes
                                            </h5>
                                            <p class="mb-0"><strong>35 </strong>/ 100</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-violet-500" role="progressbar"
                                                style="width: 35%;"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Transaction</h4>
                    </div>
                    <div class="card-body">
                        <div class="create-new-category">
                            <form class="row">
                                <div class="mb-3 col-lg-2">
                                    <label class="form-label">Type </label>
                                    <select class="form-select">
                                        <option selected="">Choose...</option>
                                        <option>Income</option>
                                        <option>Expenses</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-2">
                                    <label class="form-label">Category </label>
                                    <select class="form-select">
                                        <option selected="">Choose...</option>
                                        <option>Grocery</option>
                                        <option>Travel</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-4">
                                    <label class="form-label">Description </label>
                                    <input type="textarea" class="form-control" placeholder="Brief description">
                                </div>
                                <div class="mb-3 col-lg-2">
                                    <label class="form-label">Amount </label>
                                    <input type="number" class="form-control" min=0>
                                </div>
                                <div class="col-lg-2">
                                    <label class="form-label">Action </label>
                                    <button class="btn btn-success w-100">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transaction History</h4>
                        <a href="/analytics-transaction-history">More<i class="fi fi-bs-angle-right"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="transaction-table">
                            <div class="table-responsive">
                                <table class="table mb-0 table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="table-category-icon"><i
                                                        class="bg-emerald-500 fi fi-rr-barber-shop"></i>
                                                    Beauty</span>
                                            </td>
                                            <td>
                                                12.12.2023
                                            </td>
                                            <td>
                                                Grocery Items and Beverage soft drinks
                                            </td>
                                            <td>
                                                -32.20
                                            </td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="table-category-icon"><i
                                                        class="bg-teal-500 fi fi-rr-receipt"></i> Bills &
                                                    Fees</span>
                                            </td>
                                            <td>
                                                12.12.2023
                                            </td>
                                            <td>
                                                Grocery Items and Beverage soft drinks
                                            </td>
                                            <td>
                                                -32.20
                                            </td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="table-category-icon"><i
                                                        class="bg-cyan-500 fi fi-rr-car-side"></i> Car</span>
                                            </td>
                                            <td>
                                                12.12.2023
                                            </td>
                                            <td>
                                                Grocery Items and Beverage soft drinks
                                            </td>
                                            <td>
                                                -32.20
                                            </td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="table-category-icon"><i
                                                        class="bg-sky-500 fi fi-rr-graduation-cap"></i>
                                                    Education</span>
                                            </td>
                                            <td>
                                                12.12.2023
                                            </td>
                                            <td>
                                                Grocery Items and Beverage soft drinks
                                            </td>
                                            <td>
                                                -32.20
                                            </td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="table-category-icon"><i
                                                        class="bg-blue-500 fi fi-rr-clapperboard-play"></i>
                                                    Entertainment</span>
                                            </td>
                                            <td>
                                                12.12.2023
                                            </td>
                                            <td>
                                                Grocery Items and Beverage soft drinks
                                            </td>
                                            <td>
                                                -32.20
                                            </td>
                                            <td>USD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>