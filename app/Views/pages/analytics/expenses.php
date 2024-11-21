<?= $this->extend('layouts/analytics') ?>

<?= $this->section('title') ?>
Expenses
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Expenses
<?= $this->endSection() ?>

<?= $this->section('analytics-content') ?>
<div class="row">
    <div class=" col-xxl-4 col-xl-4 col-lg-4 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Expenses Breakdown</h4>
            </div>
            <div class="card-body">
                <canvas id="chartjsDonutexpenses"></canvas>
                <div class="list-1 mt-3">
            <ul id="incomeList">
                <!-- The list will be dynamically updated -->
            </ul>
        </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Transaction History</h4>
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
                                <?php foreach ($transactions as $transaction): ?>
                                    <tr>
                                        <td>
                                            <span class="table-category-icon">
                                                <i style="background: <?= esc($transaction['category_color']) ?>;"></i>
                                                <?= esc($transaction['category_name']) ?>
                                            </span>
                                        </td>
                                        <td>
                                            <?= esc(date('d.m.Y', strtotime($transaction['created_at']))) ?>
                                        </td>
                                        <td>
                                            <?= esc($transaction['description']) ?>
                                        </td>
                                        <td>
                                            <?= esc($transaction['amount']) ?>
                                        </td>
                                        <td>
                                            <?= esc($transaction['currency']) ?>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>