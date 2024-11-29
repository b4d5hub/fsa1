<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Analytics
<?= $this->endSection() ?>


<?= $this->section('content') ?>
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
<script src="<?= base_url('vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('vendor/chartjs/chartjs.js'); ?>"></script>
<script src="<?= base_url('js/plugins/chartjs-donut.js'); ?>"></script>
<script src="<?= base_url('js/scripts.js'); ?>"></script>
<script src="<?= base_url('js/plugins/chartjs-line-balance-wallet.js'); ?>"></script>
<script src="<?= base_url('js/plugins/chartjs-line-total-balance.js'); ?>"></script>
<?= $this->endSection() ?>