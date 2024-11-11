<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Expenses
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
                                <h3>Dashboard</h3>
                                <p class="mb-2">Welcome TrackWise Finance Management</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="breadcrumbs"><a href="#">Home </a>
                                <span><i class="fi fi-rr-angle-small-right"></i></span>
                                <a href="#">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Transaction</h4>
                    </div>
                    <div class="card-body">
                        <div class="create-new-category">
                            <form action="<?= site_url('transactions/add') ?>" method="post" class="row">
                                <div class="mb-3 col-lg-2">
                                    <label class="form-label">Type</label>
                                    <select class="form-select" name="type">
                                        <option selected="">Choose...</option>
                                        <option value="Income">Income</option>
                                        <option value="Expenses">Expenses</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-2">
                                    <label class="form-label">Category</label>
                                    <select class="form-select" name="category">
                                        <option selected="">Choose...</option>
                                        <?php foreach ($categories as $category): ?>
                                            <option value="<?= $category['id'] ?>"><?= esc($category['name']) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3 col-lg-4">
                                    <label class="form-label">Description</label>
                                    <input type="text" name="description" class="form-control" placeholder="Brief description">
                                </div>
                                <div class="mb-3 col-lg-2">
                                    <label class="form-label">Amount</label>
                                    <input type="number" name="amount" class="form-control" min="0">
                                </div>
                                <div class="col-lg-2">
                                    <label class="form-label">Action</label>
                                    <button type="submit" class="btn btn-success w-100">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Transaction History</h4>
                    </div>
                    <div class="card-body">
                        <div class="transaction-table">
                            <div class="table-responsive">
                                <table class="table mb-0 table-responsive-sm category-type">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                            <th></th>
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
                                                    <div class="right-category">
                                                        <span><i class="fi fi-rs-pencil"></i></span>
                                                        <form action="<?= base_url('/transactions/delete/' . $transaction['id']) ?>" method="post" style="display:inline;">
                                                            <button type="submit" style="background:none; border:none; color:inherit;" onclick="return confirm('Are you sure you want to delete this transaction?')">
                                                                <span><i class="fi fi-rr-trash"></i></span>
                                                            </button>
                                                        </form>
                                                    </div>
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
    </div>
</div>
<?= $this->endSection() ?>