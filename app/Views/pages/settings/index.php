<?= $this->extend('layouts/settings') ?>

<?= $this->section('title') ?>
Settings
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Settings
<?= $this->endSection() ?>

<?= $this->section('settings-content') ?>
<div class="row">
    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="card ">
                                    <div class="card-body">
                                        <div class="welcome-profile">
                                            <div class="d-flex align-items-center">
                                                <img src="./images/avatar/3.jpg" alt="">
                                                <div class="ms-3">
                                                    <h4>Welcome, Hafsa Humaira!</h4>
                                                    <p>Looks like you are not verified yet. Verify yourself to use the
                                                        full
                                                        potential of
                                                        Ekash.</p>
                                                </div>
                                            </div>
                                            <ul>
                                                <li><a href="#"><span class="verified"><i
                                                                class="fi fi-bs-check"></i></span>Verify
                                                        account</a></li>
                                                <li><a href="#"><span class="not-verified"><i
                                                                class="fi fi-rs-shield-check"></i></span>Two-factor
                                                        authentication
                                                        (2FA)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
    </div>
    <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Download App</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="app-link">
                                            <h5>Get Verified On Our Mobile App</h5>
                                            <p>Verifying your identity on our mobile app more secure, faster, and
                                                reliable.
                                            </p>
                                            <a href="#" class="btn btn-primary"><img src="./images/android.svg"
                                                    alt=""></a><br>
                                            <div class="mt-3"></div>
                                            <a href="#" class="btn btn-primary"><img src="./images/apple.svg"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </div>
    </div>
    <div class="col-xxl-8 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">VERIFY &amp; UPGRADE </h4>
                                    </div>
                                    <div class="card-body">
                                        <h5>Account Status :
                                            <span class="text-warning"> Pending</span>
                                        </h5>
                                        <p>Your account is unverified. Get verified to enable funding, trading, and
                                            withdrawal.</p>
                                        <a href="#" class="btn btn-primary">Get Verified</a>
                                    </div>
                                </div>
    </div>
    <div class="col-xxl-4 col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Earn 30% Commission </h4>
                                    </div>
                                    <div class="card-body">
                                        <p>Refer your friends and earn 30% of <br> their trading fees.</p>
                                        <a href="affiliates.html" class="btn btn-primary">Referral Program</a>
                                    </div>
                                </div>
    </div>
    <div class="col-xxl-12">
                                <div class="card">
                                    <div class="card-header flex-row">
                                        <h4 class="card-title">Information </h4>
                                        <a class="btn btn-primary" href="/settings-profile.html">Edit</a>
                                    </div>
                                    <div class="card-body">
                                        <form class="row">
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <div class="user-info">
                                                    <span>USER ID</span>
                                                    <h4>818778</h4>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <div class="user-info">
                                                    <span>EMAIL ADDRESS</span>
                                                    <h4>email@example.com</h4>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <div class="user-info">
                                                    <span>COUNTRY OF RESIDENCE</span>
                                                    <h4>Bangladesh</h4>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <div class="user-info">
                                                    <span>JOINED SINCE</span>
                                                    <h4>20/10/2020</h4>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <div class="user-info">
                                                    <span>TYPE</span>
                                                    <h4>Personal</h4>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
    </div>
                        </div>
<?= $this->endSection() ?>