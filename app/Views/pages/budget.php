<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Monthly Budget
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content-body">
    <div class="container">
        <?php if ($budget): ?>
            <div class="row">
                <div class="budgets-tab-title">
                    <h3>My Monthly Budget</h3>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span><i class="fi fi-rr-money-bill-wave-alt"></i></span>
                                    <h6>Total budget</h6>
                                    <h3>$6,886.6</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>Spent</span>
                                    <h3>$1458.30</h3>
                                </div>
                                <div class="text-end">
                                    <span>Remaining</span>
                                    <h3>$5428.30</h3>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" style="width: 25%;"
                                    role="progressbar">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <span>25%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="goals-widget">
                                        <p>Last Month</p>
                                        <h3>$42,678</h3>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="goals-widget">
                                        <p>Expenses</p>
                                        <h3>$1,798</h3>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="goals-widget">
                                        <p>Taxes</p>
                                        <h3>$255.25</h3>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                    <div class="goals-widget">
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
                            <h4 class="card-title">Top 3 Expenses</h4>
                        </div>
                        <div class="card-body available-wallet">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-grow-2 goals-wallet-progress">
                                    <div class="goals-icon">
                                        <span class="bg-yellow-500"><i
                                                class="fi fi-rr-bank"></i></span>
                                    </div>
                                    <div class="goals-info flex-grow-2 me-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h5 class="mb-1">City Bank</h5>
                                            <p class="mb-0">150$</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar"
                                                style="width: 75%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-grow-2 goals-wallet-progress">
                                    <div class="goals-icon">
                                        <span class="bg-indigo-500"><i
                                                class="fi fi-rr-money-bills-simple"></i></span>
                                    </div>
                                    <div class="goals-info flex-grow-2 me-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h5 class="mb-1">Cash Wallet</h5>
                                            <p class="mb-0">150$</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success"
                                                role="progressbar" style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-grow-2 goals-wallet-progress">
                                    <div class="goals-icon">
                                        <span class="bg-purple-500"><i
                                                class="fi fi-rr-credit-card"></i></span>
                                    </div>
                                    <div class="goals-info flex-grow-2 me-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <h5 class="mb-1">Visa Card</h5>
                                            <p class="mb-0">150$</p>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="verification section-padding">
                <div class="container h-100">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-xl-5 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title ">Set your monthly budget</h4>
                                </div>
                                <div class="card-body">
                                    <form action="#">
                                        <div class="row">
                                            <div class="mb-3 col-xl-12">
                                                <label class="form-label">Amount </label>
                                                <input type="number" min=0 require class="form-control" placeholder="35555">
                                            </div>
                                            <div class="text-center col-12">
                                                <button type="submit" class="btn btn-success w-100">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>