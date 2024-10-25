<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Monthly Budget
<?= $this->endSection() ?>

<?= $this->section('content') ?>
        <div class="content-body">
        <div class="verification section-padding">
                <div class="container h-100">
                    <div class="row justify-content-center h-100 align-items-center">
                        <div class="col-xl-5 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title ">Set your monthly budget</h4>
                                </div>
                                <div class="card-body">
                                    <form action="budget2">
                                        <div class="row">
                                            <div class="mb-3 col-xl-12">
                                                <label class="form-label">Amount </label>
                                                <input type="number" min=0 require class="form-control" placeholder="35555">
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
        </div>
<?= $this->endSection() ?>