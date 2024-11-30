<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Settings
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-xxl-12 col-xl-12">
        <div class="settings-menu">
            <a href="./settings">Account</a>
            <a href="./settings-profile">Profile</a>
        </div>
        <?= $this->renderSection('settings-content') ?>
    </div>
</div>
</div>
</div>
<?= $this->endSection() ?>