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
                                    <div class="privacy-link"><a href="#">Have an issue with 2-factor
                                            authentication?</a><br /><a href="#">Privacy Policy</a></div>
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
                                <h4>Sign In</h4>
                                <?php if (session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger">
                                        <?= session()->getFlashdata('error'); ?>
                                    </div>
                                <?php endif; ?>
                                <form form action="/auth/login" method="post">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Email</label>
                                            <input name="email" type="text" class="form-control" />
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label">Password</label>
                                            <input name="password" type="password" class="form-control" />
                                        </div>
                                        
                                    </div>
                                    <div class="mt-3 d-grid gap-2"><button type="submit"
                                            class="btn btn-primary me-8 text-white">Sign In</button></div>
                                </form>
                                <p class="mt-3 mb-0 undefined">Don't have an account?<a class="text-primary"
                                        href="/signup"> Sign up</a></p>
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