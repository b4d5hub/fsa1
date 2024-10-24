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
                <h4 class="card-title">Add New Transaction</h4>
            </div>
            <div class="card-body">
                <div class="create-new-category">
                                            <form class="row">
                                                <div class="mb-3 col-5">
                                                    <label class="form-label">Category </label>
                                                    <select class="form-select">
                                                        <option selected="">Choose...</option>
                                                        <option>Income</option>
                                                        <option>Expenses</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-5">
                                                    <label class="form-label">Description </label>
                                                    <input type="textarea" class="form-control" placeholder="Brief description">
                                                </div>
                                                <div class="col-2">
                                                    <label class="form-label">Action </label>
                                                    <button class="btn btn-danger w-100">Add Expense</button>
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
                                                        <tr>
                                                            <td>
                                                                <span class="table-category-icon"><i
                                                                        class="bg-emerald-500 fi fi-rr-barber-shop"></i>
                                                                    Beauty</span>
                                                            </td>
                                                            <td>
                                                                12.12.2023
                                                            </td>
                                                            <td>
                                                                Grocery Items and Beverage soft drinks
                                                            </td>
                                                            <td>
                                                                -32.20
                                                            </td>
                                                            <td>USD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="table-category-icon"><i
                                                                        class="bg-teal-500 fi fi-rr-receipt"></i> Bills
                                                                    &
                                                                    Fees</span>
                                                            </td>
                                                            <td>
                                                                12.12.2023
                                                            </td>
                                                            <td>
                                                                Grocery Items and Beverage soft drinks
                                                            </td>
                                                            <td>
                                                                -32.20
                                                            </td>
                                                            <td>USD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="table-category-icon"><i
                                                                        class="bg-cyan-500 fi fi-rr-car-side"></i>
                                                                    Car</span>
                                                            </td>
                                                            <td>
                                                                12.12.2023
                                                            </td>
                                                            <td>
                                                                Grocery Items and Beverage soft drinks
                                                            </td>
                                                            <td>
                                                                -32.20
                                                            </td>
                                                            <td>USD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="table-category-icon"><i
                                                                        class="bg-sky-500 fi fi-rr-graduation-cap"></i>
                                                                    Education</span>
                                                            </td>
                                                            <td>
                                                                12.12.2023
                                                            </td>
                                                            <td>
                                                                Grocery Items and Beverage soft drinks
                                                            </td>
                                                            <td>
                                                                -32.20
                                                            </td>
                                                            <td>USD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="table-category-icon"><i
                                                                        class="bg-blue-500 fi fi-rr-clapperboard-play"></i>
                                                                    Entertainment</span>
                                                            </td>
                                                            <td>
                                                                12.12.2023
                                                            </td>
                                                            <td>
                                                                Grocery Items and Beverage soft drinks
                                                            </td>
                                                            <td>
                                                                -32.20
                                                            </td>
                                                            <td>USD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="table-category-icon"><i
                                                                        class="bg-emerald-500 fi fi-rr-barber-shop"></i>
                                                                    Beauty</span>
                                                            </td>
                                                            <td>
                                                                12.12.2023
                                                            </td>
                                                            <td>
                                                                Grocery Items and Beverage soft drinks
                                                            </td>
                                                            <td>
                                                                -32.20
                                                            </td>
                                                            <td>USD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="table-category-icon"><i
                                                                        class="bg-teal-500 fi fi-rr-receipt"></i> Bills
                                                                    &
                                                                    Fees</span>
                                                            </td>
                                                            <td>
                                                                12.12.2023
                                                            </td>
                                                            <td>
                                                                Grocery Items and Beverage soft drinks
                                                            </td>
                                                            <td>
                                                                -32.20
                                                            </td>
                                                            <td>USD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="table-category-icon"><i
                                                                        class="bg-cyan-500 fi fi-rr-car-side"></i>
                                                                    Car</span>
                                                            </td>
                                                            <td>
                                                                12.12.2023
                                                            </td>
                                                            <td>
                                                                Grocery Items and Beverage soft drinks
                                                            </td>
                                                            <td>
                                                                -32.20
                                                            </td>
                                                            <td>USD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="table-category-icon"><i
                                                                        class="bg-sky-500 fi fi-rr-graduation-cap"></i>
                                                                    Education</span>
                                                            </td>
                                                            <td>
                                                                12.12.2023
                                                            </td>
                                                            <td>
                                                                Grocery Items and Beverage soft drinks
                                                            </td>
                                                            <td>
                                                                -32.20
                                                            </td>
                                                            <td>USD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="table-category-icon"><i
                                                                        class="bg-blue-500 fi fi-rr-clapperboard-play"></i>
                                                                    Entertainment</span>
                                                            </td>
                                                            <td>
                                                                12.12.2023
                                                            </td>
                                                            <td>
                                                                Grocery Items and Beverage soft drinks
                                                            </td>
                                                            <td>
                                                                -32.20
                                                            </td>
                                                            <td>USD</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    </div>
</div>
<?= $this->endSection() ?>