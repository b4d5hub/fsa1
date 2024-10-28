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
                                            <form class="row">
                                                <div class="mb-3 col-lg-2">
                                                    <label class="form-label">Type </label>
                                                    <select class="form-select">
                                                        <option selected="">Choose...</option>
                                                        <option>Income</option>
                                                        <option>Expenses</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-lg-2">
                                                    <label class="form-label">Category </label>
                                                    <select class="form-select">
                                                        <option selected="">Choose...</option>
                                                        <option>Grocery</option>
                                                        <option>Travel</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-lg-4">
                                                    <label class="form-label">Description </label>
                                                    <input type="textarea" class="form-control" placeholder="Brief description">
                                                </div>
                                                <div class="mb-3 col-lg-2">
                                                    <label class="form-label">Amount </label>
                                                    <input type="number" class="form-control" min=0>
                                                </div>
                                                <div class="col-lg-2">
                                                    <label class="form-label">Action </label>
                                                    <button class="btn btn-success w-100">Add</button>
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
                                                    <td>
                                                    <div class="right-category">
                                                        <span><i class="fi fi-rs-pencil"></i></span>
                                                        <span><i class="fi fi-rr-trash"></i></span>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="table-category-icon"><i
                                                                class="bg-teal-500 fi fi-rr-receipt"></i> Bills &
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
                                                    <td>
                                                    <div class="right-category">
                                                        <span><i class="fi fi-rs-pencil"></i></span>
                                                        <span><i class="fi fi-rr-trash"></i></span>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="table-category-icon"><i
                                                                class="bg-cyan-500 fi fi-rr-car-side"></i> Car</span>
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
                                                    <td>
                                                    <div class="right-category">
                                                        <span><i class="fi fi-rs-pencil"></i></span>
                                                        <span><i class="fi fi-rr-trash"></i></span>
                                                    </div>
                                                    </td>
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
                                                    <td>
                                                    <div class="right-category">
                                                        <span><i class="fi fi-rs-pencil"></i></span>
                                                        <span><i class="fi fi-rr-trash"></i></span>
                                                    </div>
                                                    </td>
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
                                                    <td>
                                                    <div class="right-category">
                                                        <span><i class="fi fi-rs-pencil"></i></span>
                                                        <span><i class="fi fi-rr-trash"></i></span>
                                                    </div>
                                                    </td>
                                                </tr>
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