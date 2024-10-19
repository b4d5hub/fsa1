<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Budgets
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
                                        <h3>Budgets</h3>
                                        <p class="mb-2">Welcome Ekash Finance Management</p>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="breadcrumbs"><a href="#">Home </a>
                                        <span><i class="fi fi-rr-angle-small-right"></i></span>
                                        <a href="#">Budgets</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="budgets-tab">
                    <div class="row g-0">
                        <div class="col-xl-3">
                            <div class="nav d-block">
                                <div class="row">
                                    <div class="col-xl-12 col-md-6">
                                        <div class="budgets-nav active" data-bs-toggle="pill" data-bs-target="#a1">
                                            <div class="budgets-nav-icon">
                                                <span><i class="fi fi-rr-carrot"></i></span>
                                            </div>
                                            <div class="budgets-nav-text">
                                                <h3>Grocery</h3>
                                                <p>$1458.30</p>
                                            </div>
                                            <span class="show-time">Overtime</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-6">
                                        <div class="budgets-nav" data-bs-toggle="pill" data-bs-target="#a2">
                                            <div class="budgets-nav-icon">
                                                <span><i class="fi fi-rr-shirt-long-sleeve"></i></span>
                                            </div>
                                            <div class="budgets-nav-text">
                                                <h3>Cloths</h3>
                                                <p>$1458.30</p>
                                            </div>
                                            <span class="show-time">Week</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-6">
                                        <div class="budgets-nav" data-bs-toggle="pill" data-bs-target="#a3">
                                            <div class="budgets-nav-icon">
                                                <span><i class="fi fi-rr-car-bus"></i></span>
                                            </div>
                                            <div class="budgets-nav-text">
                                                <h3>Transportation</h3>
                                                <p>$1458.30</p>
                                            </div>
                                            <span class="show-time">Month</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-md-6">
                                        <div class="budgets-nav" data-bs-toggle="pill" data-bs-target="#a4">
                                            <div class="budgets-nav-icon">
                                                <span><i class="fi fi-rr-graduation-cap"></i></span>
                                            </div>
                                            <div class="budgets-nav-text">
                                                <h3>Education</h3>
                                                <p>$1458.30</p>
                                            </div>
                                            <span class="show-time">Day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-budgets-link">
                                <h5 class="mb-0">Add new budget</h5>
                                <a href="add-new-account.html">
                                    <i class="fi fi-rr-square-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="tab-content budgets-tab-content">
                                <div class="tab-pane show active" id="a1">
                                    <div class="budgets-tab-title">
                                        <h3>Grocery</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <span>Spend</span>
                                                            <h3>$1458.30</h3>
                                                        </div>
                                                        <div class="text-end">
                                                            <span>Budget</span>
                                                            <h3>$1458.30</h3>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 25%;"
                                                            role="progressbar">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-2">
                                                        <span>25%</span>
                                                        <span>75%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Last Month</p>
                                                                <h3>$42,678</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Expenses</p>
                                                                <h3>$1,798</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Taxes</p>
                                                                <h3>$255.25</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Debt</p>
                                                                <h3>$365,478</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Budget Period </h4>
                                                </div>
                                                <div class="card-body">
                                                    <canvas id="chartjsBudgetPeriod"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="a2">
                                    <div class="budgets-tab-title">
                                        <h3>Cloths</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <span>Spend</span>
                                                            <h3>$1458.30</h3>
                                                        </div>
                                                        <div class="text-end">
                                                            <span>Budget</span>
                                                            <h3>$1458.30</h3>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 25%;"
                                                            role="progressbar">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-2">
                                                        <span>25%</span>
                                                        <span>75%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Last Month</p>
                                                                <h3>$42,678</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Expenses</p>
                                                                <h3>$1,798</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Taxes</p>
                                                                <h3>$255.25</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Debt</p>
                                                                <h3>$365,478</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Budget Period </h4>
                                                </div>
                                                <div class="card-body">
                                                    <canvas id="chartjsBudgetPeriod2"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="a3">
                                    <div class="budgets-tab-title">
                                        <h3>Transportation</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <span>Spend</span>
                                                            <h3>$1458.30</h3>
                                                        </div>
                                                        <div class="text-end">
                                                            <span>Budget</span>
                                                            <h3>$1458.30</h3>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 25%;"
                                                            role="progressbar">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-2">
                                                        <span>25%</span>
                                                        <span>75%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Last Month</p>
                                                                <h3>$42,678</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Expenses</p>
                                                                <h3>$1,798</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Taxes</p>
                                                                <h3>$255.25</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Debt</p>
                                                                <h3>$365,478</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Budget Period </h4>
                                                </div>
                                                <div class="card-body">
                                                    <canvas id="chartjsBudgetPeriod3"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="a4">
                                    <div class="budgets-tab-title">
                                        <h3>Education</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <span>Spend</span>
                                                            <h3>$1458.30</h3>
                                                        </div>
                                                        <div class="text-end">
                                                            <span>Budget</span>
                                                            <h3>$1458.30</h3>
                                                        </div>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 25%;"
                                                            role="progressbar">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-2">
                                                        <span>25%</span>
                                                        <span>75%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Last Month</p>
                                                                <h3>$42,678</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Expenses</p>
                                                                <h3>$1,798</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Taxes</p>
                                                                <h3>$255.25</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                                            <div class="budget-widget">
                                                                <p>Debt</p>
                                                                <h3>$365,478</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Budget Period </h4>
                                                </div>
                                                <div class="card-body">
                                                    <canvas id="chartjsBudgetPeriod4"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<?= $this->endSection() ?>