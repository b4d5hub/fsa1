<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TrackWise : Personal Finance Management App</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./vendor/toastr/toastr.min.css">
</head>

<body class="dashboard">
    <div id="preloader" class="preloader-wrapper">
        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="authincation">
        <div class="container">
            <div class="row justify-content-center align-items-center g-0">
                <div class="col-xl-8">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <div class="welcome-content">
                                <div class="welcome-title">
                                    <div class="mini-logo">
                                        <a href="/">
                                            <img src="/images/logo-white.png" alt="" width="30" /></a>
                                    </div>
                                    <h3>Welcome to TrackWise</h3>
                                </div>
                                <div class="privacy-social">
                                    <div class="privacy-link"><a href="/contact">Have an issue signing up?</a></div>
                                    <div class="intro-social">
                                        <ul>
                                            <li><a href="#"><i class="fi fi-brands-facebook"></i></a></li>
                                            <li><a href="#"><i class="fi fi-brands-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="fi fi-brands-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fi fi-brands-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="auth-form">
                                <h4>Sign Up</h4>
                                <?php if (session()->getFlashdata('success')): ?>
                                    <p class="text-success"><?= session()->getFlashdata('success') ?></p>
                                <?php endif; ?>

                                <?php if (session()->getFlashdata('error')): ?>
                                    <p class="text-danger"><?= session()->getFlashdata('error') ?></p>
                                <?php endif; ?>
                                <form action="<?= base_url('auth/register'); ?>" method="post">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" id="name" name="name" value="<?= old('name'); ?>" class="form-control">
                                            <!-- Display error for fullName -->
                                            <?php if (session('errors.name')): ?>
                                                <small class="text-danger"><?= session('errors.name') ?></small>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Email -->
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" id="email" name="email" value="<?= old('email'); ?>" class="form-control">
                                            <!-- Display error for email -->
                                            <?php if (session('errors.email')): ?>
                                                <small class="text-danger"><?= session('errors.email') ?></small>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Password -->
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" id="password" name="password" class="form-control">
                                            <!-- Display error for password -->
                                            <?php if (session('errors.password')): ?>
                                                <small class="text-danger"><?= session('errors.password') ?></small>
                                            <?php endif; ?>
                                        </div>
                                        <div class="mt-3 d-grid gap-2">
                                            <button type="submit" class="btn btn-primary">Sign Up</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="mt-3 mb-0 undefined">Already have an account?<a class="text-primary"
                                        href="/signin"> Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/scripts.js"></script>
</body>

</html>