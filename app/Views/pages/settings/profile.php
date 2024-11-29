<?= $this->extend('layouts/settings') ?>

<?= $this->section('title') ?>
Profile
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Settings - Profile
<?= $this->endSection() ?>

<?= $this->section('settings-content') ?>
<div class="row">
    <div class="col-xl-12">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Preferences</h4>
            </div>
            <div class="card-body">
                <form action="auth/changeCurrency" method="POST">
                    <div class="row">
                        <div class="mb-3 col-12">
                            <label class="form-label">Primary Currency</label>
                            <select class="form-select" name="currency" required>
                                <option value="MAD" <?= ($user['currency'] == 'MAD') ? 'selected' : ''; ?>>MAD</option>
                                <option value="USD" <?= ($user['currency'] == 'USD') ? 'selected' : ''; ?>>USD</option>
                                <option value="EUR" <?= ($user['currency'] == 'EUR') ? 'selected' : ''; ?>>EUR</option>
                                <option value="AED" <?= ($user['currency'] == 'AED') ? 'selected' : ''; ?>>AED</option>
                                <option value="GBP" <?= ($user['currency'] == 'GBP') ? 'selected' : ''; ?>>GBP</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary pl-5 pr-5">Save</button>
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
                <form action="auth/changeName" method="POST">
                    <div class="row g-3">
                        <div class="col-xxl-12 col-12 mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" value="<?= $user['name']; ?>" placeholder="Name" name="name" required>
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
                <form action="auth/changeEmail_pw" method="POST">
                    <div class="row g-3">
                        <div class="col-12 mb-3">
                            <label class="form-label">New Email</label>
                            <input type="email" name="email" value="<?= $user['email']; ?>" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">New Password</label>
                            <input type="password" name="password" class="form-control" placeholder="**********" required>
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>