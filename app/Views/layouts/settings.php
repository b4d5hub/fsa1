<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Settings
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
                                        <h3><?= $this->renderSection('h3title') ?></h3>
                                        <p class="mb-2">Welcome TrackWise Finance Management</p>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="breadcrumbs"><a href="#">Home </a>
                                        <span><i class="fi fi-rr-angle-small-right"></i></span>
                                        <a href="#">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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