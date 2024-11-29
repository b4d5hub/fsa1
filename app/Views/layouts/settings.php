<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Settings
<?= $this->endSection() ?>

<?= $this->section('content') ?>
                <div class="row">
                    <div class="col-xxl-12 col-xl-12">
                        <div class="settings-menu">
                            <a href="./settings">Account</a>
                            <!-- <a href="./settings-general">General</a> -->
                            <a href="./settings-profile">Profile</a>
                            <!-- <a href="./settings-bank">Add Bank</a>
                            <a href="./settings-security">Security</a>
                            <a href="./settings-session">Session</a>
                            <a href="./settings-categories">Categories</a>
                            <a href="./settings-currencies">Currencies</a>
                            <a href="./settings-api">Api</a> -->
                            <a href="./support">Support</a>
                        </div>
                        <?= $this->renderSection('settings-content') ?>
                    </div>
                </div>
    </div>
</div>
<?= $this->endSection() ?>