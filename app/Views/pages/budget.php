<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Monthly Budget
<?= $this->endSection() ?>

<?= $this->section('content') ?>

        <?php if (isset($curuser['budget']) && $curuser['budget'] > 0): ?>
            <div class="row">
                <div class="budgets-tab-title d-flex justify-content-between align-items-center pb-2" style="float:right; width: 100%;">
                    <h3>My Monthly Budget</h3>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editBudgetModal">Edit Budget</button>
                    <!-- <form action="/" method="post">
                        <button type="submit" class="btn btn-primary">Edit Budget</button>
                    </form> -->
                </div>

                <div class="modal fade" id="editBudgetModal" tabindex="-1" aria-labelledby="editBudgetModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="/budget/set" method="post">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editBudgetModalLabel">Edit Monthly Budget</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="budgetAmount" class="form-label">Budget Amount</label>
                                        <input type="number" class="form-control" id="budgetAmount" name="budget" min="0"
                                            value="<?= esc($curuser['budget']); ?>" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span><i class="fi fi-rr-money-bill-wave-alt"></i></span>
                                    <h6>Total budget</h6>
                                    <h3><?= esc($curuser['currency']) ?><?= esc(number_format($curuser['budget'], 2)) ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>Spent</span>
                                    <h3><?= esc($curuser['currency']) ?><?= number_format($spent, 2) ?></h3>
                                </div>
                                <div class="text-end">
                                    <span>Remaining</span>
                                    <h3><?= esc($curuser['currency']) ?><?= number_format($remaining, 2) ?></h3>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" style="width: <?= esc($percentageSpent) ?>%;"
                                    role="progressbar">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <span><?= esc($percentageSpent) ?>%</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Top 3 Expenses</h4>
                        </div>
                        <div class="card-body available-wallet">
                            <?php if (!empty($topExpenseCategories)): ?>
                                <?php foreach ($topExpenseCategories as $category): ?>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex flex-grow-2 goals-wallet-progress">
                                            <div class="goals-icon">
                                                <span style="background-color: <?= esc($category['color']); ?>;">
                                                    <i class="fi fi-rr-folder"></i>
                                                </span>
                                            </div>
                                            <div class="goals-info flex-grow-2 me-3">
                                                <div class="d-flex justify-content-between mb-1">
                                                    <h5 class="mb-1"><?= esc($category['name']); ?></h5>
                                                    <p class="mb-0"><?= esc($curuser['currency']) ?><?= number_format($category['total_amount'], 2); ?></p>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar"
                                                        style="width: <?= min(($category['total_amount'] / 1000) * 100, 100); ?>%;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-muted">No expense categories found.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="verification section-padding">
                <div class="container h-100">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-xl-5 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title ">Set your monthly budget</h4>
                                </div>
                                <div class="card-body">
                                    <form action="/budget/set" method="post">
                                        <div class="row">
                                            <div class="mb-3 col-xl-12">
                                                <label class="form-label">Amount </label>
                                                <input type="number" name="budget" min=0 require class="form-control" placeholder="35555">
                                            </div>
                                            <div class="text-center col-12">
                                                <button type="submit" class="btn btn-success w-100">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>