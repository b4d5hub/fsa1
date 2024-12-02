<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Dashboard
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Dashboard
<?= $this->endSection() ?>

<?= $this->section('h3desc') ?>
Welcome TrackWise Finance Management
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <div class="stat-widget-1">
            <h6>Total Balance</h6>
            <pre>Lifetime Income - Expenses</pre>
            <h3 class="<?= $totalbalance < 0 ? 'text-danger' : 'text-success' ?>">
                <?= esc($user['currency']) . esc(number_format($totalbalance, 2)) ?>
            </h3>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <div class="stat-widget-1">
            <h6>Lifetime Expenses</h6>
            <pre>Total Expense Transactions</pre>
            <h3><?= esc($user['currency']) . esc(number_format($userexpenses, 2)) ?></h3>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
        <div class="stat-widget-1">
            <h6>Lifetime Income</h6>
            <pre>Total Income Transactions</pre>
            <h3><?= esc($user['currency']) . esc(number_format($userincome, 2)) ?></h3>
        </div>
    </div>
</div>
<div class="row">
    <!-- <div class="col-xl-12">
        <div class="card">
            <div class="card-header balance-trend">
                <h4 class="card-title">Lorem ipsum dolor <br> <span><?= esc($user['currency']) . esc(number_format($totalbalance, 2)) ?></span></h4>
                <div class="trend-stats">
                    <p class="mb-0">Last Month</p>
                    <span class="text-success">
                        <i class="fi fi-rr-arrow-trend-up"></i>
                        <?= esc(number_format(abs($balancePercentage), 2)) ?>%
                    </span>
                </div>
            </div>
            <div class="card-body">
                <canvas id="profileWallet"></canvas>
            </div>
        </div>
    </div> -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Transactions Overview</h4>
                <div id="area-chart-action">
                    <span class="active">Day</span>
                    <span>Week</span>
                    <span>Month</span>
                    <span>Year</span>
                </div>
            </div>
            <div class="card-body">
                <canvas id="expvsinc" height="200" class="chartjs chartjs-render-monitor"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Latest Transaction</h4>
                <a href="/analytics-transaction-history">More<i class="fi fi-bs-angle-right"></i></a>
            </div>
            <div class="card-body">
                <div class="transaction-table">
                    <div class="table-responsive">
                        <table class="table mb-0 table-responsive-sm table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                    <th>Currency</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($transactions)): ?>
                                    <?php $count = 0;
                                    foreach ($transactions as $transaction): if ($count >= 5) break; ?>
                                        <tr>
                                            <td class="text-<?= esc($transaction['type']) === 'Income' ? 'success' : 'danger'; ?>">
                                                <?= esc($transaction['type']); ?>
                                            </td>
                                            <td>
                                                <?= esc($transaction['category_name']); ?>
                                            </td>
                                            <td>
                                                <?= esc($transaction['description']); ?>
                                            </td>
                                            <td>
                                                <?= esc(number_format($transaction['amount'], 2)); ?>
                                            </td>
                                            <td>
                                                <?= esc($transaction['currency']); ?>
                                            </td>
                                            <td>
                                                <?= date('d.m.Y', strtotime($transaction['created_at'])); ?>
                                            </td>
                                        </tr>
                                    <?php $count++;
                                    endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6" class="text-center">No transactions found</td>
                                    </tr>
                                <?php endif; ?>
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