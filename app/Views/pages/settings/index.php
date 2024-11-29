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
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Notifications</h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row col-6">
                        <div class="mb-3 mb-0">
                            <label class="toggle">
                                <input class="toggle-checkbox" type="checkbox" checked>
                                <div class="toggle-switch"></div>
                                <span class="toggle-label">I hit my monthly budget</span>
                            </label>
                            <label class="toggle">
                                <input class="toggle-checkbox" type="checkbox">
                                <div class="toggle-switch"></div>
                                <span class="toggle-label">I change my account credentials</span>
                            </label>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>