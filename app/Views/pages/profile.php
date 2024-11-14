<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Profile
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
                                <h3>Profile</h3>
                                <p class="mb-2">Welcome TrackWise Finance Management</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="breadcrumbs"><a href="#">Home </a>
                                <span><i class="fi fi-rr-angle-small-right"></i></span>
                                <a href="#">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-name">
                            <div class="d-flex">

                                <div class="flex-grow-1 text-center">
                                    <h4 class="mb-0"><?= esc($user['name']) ?></h4>
                                    <p><?= esc($user['email']) ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="profile-reg">
                            <div class="registered">
                                <h5><?= date('d M Y', strtotime($user["created_at"])) ?></h5>
                                <p>Registered</p>
                            </div>
                            <span class="reg_divider"></span>
                            <div class="rank">
                                <h5><?= esc($user['currency'] . $user['budget']) ?> </h5>
                                <p>Balance</p>
                            </div>
                        </div>
                        <div class="welcome-profile">
                            <ul>
                                <li><a href="#"><span class="verified"><i class="fi fi-bs-check"></i></span>Verified</a></li>
                                <li><a href="#"><span class="not-verified"><i class="fi fi-rs-circle-xmark"></i></span>Two-factor authentication (2FA)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="stat-widget-1">
                            <h6>Total Income</h6>
                            <h3><?= esc($user['currency']) ?> 432568</h3>
                            <p>
                                <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                                Last month <strong><?= esc($user['currency']) ?>24,478</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="stat-widget-1">
                            <h6>Total Expenses</h6>
                            <h3><?= esc($user['currency']) ?> 432568</h3>
                            <p>
                                <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                                Last month <strong><?= esc($user['currency']) ?>24,478</strong>
                            </p>
                        </div>
                    </div>
                </div>
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
    </div>
</div>
<?= $this->endSection() ?>