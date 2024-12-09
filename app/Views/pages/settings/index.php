<?= $this->extend('layouts/settings') ?>

<?= $this->section('title') ?>
Settings
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Settings - Account
<?= $this->endSection() ?>

<?= $this->section('h3desc') ?>
<!-- /// -->
<?= $this->endSection() ?>

<?= $this->section('settings-content') ?>
<div class="row">
    <div class="col-xxl-12">
        <div class="card">
            <div class="card-header flex-row">
                <h4 class="card-title">Information </h4>
                <a class="btn btn-primary" href="/settings-profile">Edit</a>
            </div>
            <div class="card-body">
                <form class="row">
                    <div class="col-xxl-1 col-xl-1 col-lg-3 col-md-2">
                        <div class="user-info">
                            <span>USER ID</span>
                            <h4><?= esc($user["id"]) ?></h4>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                        <div class="user-info">
                            <span>NAME</span>
                            <h4><?= esc($user["name"]) ?></h4>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                        <div class="user-info">
                        <span>EMAIL ADDRESS</span>
                        <h4><?= isset($user['email']) ? esc($user['email']) : 'No email available' ?></h4>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6">
                        <div class="user-info">
                            <span>CURRENCY</span>
                            <h4><?= esc($user["currency"]) ?></h4>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6">
                        <div class="user-info">
                            <span>JOINED SINCE</span>
                            <h4><?= date('Y-m-d', strtotime($user["created_at"])) ?></h4>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center"><span class="me-3 icon-circle bg-warning text-white">
                                <i class="fi fi-rs-trash"></i></span>
                            <div>
                                <h5 class="mb-0">Close Account.</h5>
                                <p>All data will be erased, <span class="text-danger">this cannot be undone</span></p>
                                <form action="<?= base_url('auth/delete') ?>" method="POST">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete your account? This cannot be undone.')">Close Account</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<?= $this->endSection() ?>