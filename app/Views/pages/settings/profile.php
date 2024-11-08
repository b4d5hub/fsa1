<?= $this->extend('layouts/settings') ?>

<?= $this->section('title') ?>
Profile
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Profile
<?= $this->endSection() ?>

<?= $this->section('settings-content') ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Preferences</h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label class="form-label">Primary Currency</label>
                            <select class="form-select">
                                <option>MAD</option>
                                <option>USD</option>
                                <option>EUR</option>
                                <option>AED</option>
                                <option>GBP</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary pl-5 pr-5">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Personal Information</h4>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="row g-3">
                        <div class="col-xxl-12 col-12 mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-xxl-12 col-12 mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-xxl-12 col-12 mb-3">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Account Credentials</h4>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="row g-3">
                        <div class="col-12 mb-3">
                            <label class="form-label">New Email</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" class="form-control"
                                placeholder="**********">
                        </div>
                        <div class="col-12 col-12 mb-3">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>