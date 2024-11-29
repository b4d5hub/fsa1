<?= $this->extend('layouts/analytics') ?>

<?= $this->section('title') ?>
Summary
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Analytics
<?= $this->endSection() ?>

<?= $this->section('analytics-content') ?>

<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="analytics-widget">
            <div class="widget-icon me-3 bg-primary"><span>
                    <i class="fi fi-rr-mobile"></i></span>
            </div>
            <div class="widget-content">
                <p>Total Expense</p>
                <h3><?= $currency . number_format($lifetimeExpense, 2) ?></h3>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="analytics-widget">
            <div class="widget-icon me-3 bg-success"><span><i
                        class="fi fi-rr-replace"></i></span>
            </div>
            <div class="widget-content">
                <p>Total Income</p>
                <h3><?= $currency  .  number_format($lifetimeIncome, 2) ?></h3>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="analytics-widget">
            <div class="widget-icon me-3 bg-warning"><span><i
                        class="fi fi-rs-receipt"></i></span>
            </div>
            <div class="widget-content">
                <p>Total Transactions</p>
                <h3><?= $totalTransactions ?></h3>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="analytics-widget">
            <div class="widget-icon me-3 bg-danger">
                <span><i class="fi fi-ss-confetti"></i></span>
            </div>
            <div class="widget-content">
                <p>Categories</p>
                <h3><?= $totalCategories ?></h3>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Transactions Overview </h4>
            </div>
            <div class="card-body">
                <canvas id="chartjsIncomeVsExpense"></canvas>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>