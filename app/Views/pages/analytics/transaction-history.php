<?= $this->extend('layouts/analytics') ?>

<?= $this->section('title') ?>
Transaction History
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Transaction History
<?= $this->endSection() ?>

<?= $this->section('analytics-content') ?>
<div class="row">
    <div class="col-xl-12">
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
                                <?php if (!empty($transactions)): ?>
                                    <?php foreach ($transactions as $transaction): ?>
                                        <tr>
                                            <td>
                                                <?= esc($transaction['category_name']); ?>
                                            </td>
                                            <td>
                                                <?= date('d.m.Y', strtotime($transaction['created_at'])); ?>
                                            </td>
                                            <td>
                                                <?= esc($transaction['description']); ?>
                                            </td>
                                            <td>
                                                <?= esc($transaction['amount']); ?>
                                            </td>
                                            <td>
                                                <?= esc($transaction['currency']); ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="5">No transactions found</td>
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
<?= $this->endSection() ?>