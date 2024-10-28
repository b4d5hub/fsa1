<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Analytics
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
                                        <h3><?= $this->renderSection('h3title') ?></h3>
                                        <p class="mb-2">Welcome Ekash Finance Management</p>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="breadcrumbs"><a href="#">Home </a>
                                        <span><i class="fi fi-rr-angle-small-right"></i></span>
                                        <a href="#">Analytics</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12 col-xl-12">
                        <div class="settings-menu">
                            <a href="./analytics">Analytics</a>
                            <a href="./analytics-expenses">Expenses</a>
                            <a href="./analytics-income">Income</a>
                            <a href="./analytics-transaction-history">Transaction History</a>
                        </div>
                        <?= $this->renderSection('analytics-content') ?>
                    </div>
                </div>
            </div>
</div>
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="./vendor/chartjs/chartjs.js"></script>
<script src="./js/plugins/chartjs-donut.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/plugins/chartjs-line-balance-wallet.js"></script>
<script src="./js/plugins/chartjs-line-total-balance.js"></script>
<?= $this->endSection() ?>