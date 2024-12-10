<?= $this->extend('layouts/analytics') ?>

<?= $this->section('title') ?>
Transactions History
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Transactions History
<?= $this->endSection() ?>

<?= $this->section('analytics-content') ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Transactions History</h4>
                <form action="<?= base_url('/transactions/export') ?>" method="post">
                    <button type="submit" class="btn btn-warning">Export</button>
                </form>
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
                                    <?php foreach ($transactions as $transaction): ?>
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