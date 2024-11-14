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
                                                        <!-- <span><i class="bg-blue fi fi-rs-pencil"><a href="#" class="edit-button" data-bs-toggle="modal" data-bs-target="#editModal-<?= $transaction['id'] ?>"></a></i></span> -->
                                                        <a href="#" class="edit-button" data-bs-toggle="modal" data-bs-target="#editModal-<?= $transaction['id'] ?>">
                                                            <i class="fi fi-rs-pencil"></i>
                                                        </a>
                                                        <form action="<?= base_url('/transactions/delete/' . $transaction['id']) ?>" method="post" style="display:inline;">
                                                            <button type="submit" style="background:none; border:none; color:inherit;" onclick="return confirm('Are you sure you want to delete this transaction?')">
                                                                <span><i class="fi fi-rr-trash"></i></span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- bootstrap modal -->
                                            <?php foreach ($transactions as $transaction): ?>
                                                <!-- Edit Modal for Transaction ID: <?= $transaction['id'] ?> -->
                                                <div class="modal fade" id="editModal-<?= $transaction['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel">Edit Transaction</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="<?= base_url('transactions/update/' . $transaction['id']) ?>" method="post">
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="category-<?= $transaction['id'] ?>" class="form-label">Category</label>
                                                                            <input type="text" disabled class="form-control" name="category_id" id="category-<?= $transaction['category_id'] ?>" value="<?= esc($category['name']) ?>">
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <label for="currency-<?= $transaction['id'] ?>" class="form-label">Currency</label>
                                                                            <input type="text" class="form-control" disabled name="currency" id="currency-<?= $transaction['id'] ?>" value="<?= esc($transaction['currency']) ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="mb-3 col-md-4">
                                                                            <label for="type-<?= $transaction['id'] ?>" class="form-label">Type</label>
                                                                            <select class="form-select" name="type" id="type-<?= $transaction['id'] ?>">
                                                                                <option value="Income" <?= $transaction['type'] === 'Income' ? 'selected' : '' ?>>Income</option>
                                                                                <option value="Expenses" <?= $transaction['type'] === 'Expenses' ? 'selected' : '' ?>>Expenses</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                            <label for="description-<?= $transaction['id'] ?>" class="form-label">Description</label>
                                                                            <input type="text" class="form-control" name="description" id="description-<?= $transaction['id'] ?>" value="<?= esc($transaction['description']) ?>">
                                                                        </div>
                                                                        <div class="mb-3 col-md-4">
                                                                            <label for="amount-<?= $transaction['id'] ?>" class="form-label">Amount</label>
                                                                            <input type="number" class="form-control" min="1" name="amount" id="amount-<?= $transaction['id'] ?>" value="<?= esc($transaction['amount']) ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
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