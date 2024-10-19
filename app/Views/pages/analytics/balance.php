<?= $this->extend('layouts/analytics') ?>

<?= $this->section('title') ?>
Balance
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Balance
<?= $this->endSection() ?>

<?= $this->section('analytics-content') ?>
<div class="row">
    <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Total Balance </h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjsTotalBalance"></canvas>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Balance by Wallet </h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjsBalanceWallet"></canvas>
                                    </div>
                                </div>
    </div>
</div>
<?= $this->endSection() ?>