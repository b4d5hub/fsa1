<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TrackWise - <?= $this->renderSection('title') ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

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
    <div id="main-wrapper">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="header-content">
                            <div class="header-left">
                                <div class="brand-logo"><a class="mini-logo" href="/"><img
                                            src="./images/logoi.png" alt="" width="40"></a></div>
                                <!-- Not functioning yet -->
                                <div class="search">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search Here">
                                            <span class="input-group-text"><i class="fi fi-br-search"></i></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="header-right">
                                <div class="dark-light-toggle" onclick="themeToggle()">
                                    <span class="dark"><i class="fi fi-rr-eclipse-alt"></i></span>
                                    <span class="light"><i class="fi fi-rr-eclipse-alt"></i></span>
                                </div>
                                <div class="dropdown profile_log dropdown">
                                    <div data-bs-toggle="dropdown">
                                        <div class="user icon-menu active"><span><i class="fi fi-rr-user"></i></span>
                                        </div>
                                    </div>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                        class="dropdown-menu dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="/profile">
                                            <span><i class="fi fi-rr-user"></i></span>
                                            Profile
                                        </a>
                                        <a class="dropdown-item" href="/budget">
                                            <span><i class="fi fi-rr-wallet"></i></span>
                                            Budget
                                        </a>
                                        <a class="dropdown-item" href="/settings">
                                            <span><i class="fi fi-rr-settings"></i></span>
                                            Settings
                                        </a>
                                        <form action="/auth/logout" method="post">
                                            <button type="submit" class="dropdown-item logout">
                                                <span><i class="fi fi-bs-sign-out-alt"></i></span> Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="brand-logo"><a class="full-logo" href="/"><img src="./images/logoi.png" alt=""
                        width="30"></a></div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="/dashboard">
                            <span>
                                <i class="fi fi-rr-dashboard"></i>
                            </span>
                            <span class="nav-text">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="budget">
                            <span>
                                <i class="fi fi-rr-wallet"></i>
                            </span>
                            <span class="nav-text">Budget</span>
                        </a>
                    </li>
                    <li>
                        <a href="categories">
                            <span>
                                <i class="fi fi-rr-layers"></i>
                            </span>
                            <span class="nav-text">Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="/expenses">
                            <span>
                                <i class="fi fi-rr-donate"></i>
                            </span>
                            <span class="nav-text">Expenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="analytics">
                            <span>
                                <i class="fi fi-rr-chart-histogram"></i>
                            </span>
                            <span class="nav-text">Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="profile">
                            <span>
                                <i class="fi fi-rr-user"></i>
                            </span>
                            <span class="nav-text">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="settings">
                            <span>
                                <i class="fi fi-rs-settings"></i>
                            </span>
                            <span class="nav-text">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-4">
                                    <div class="page-title-content">
                                        <h3><?= $this->renderSection('h3title') ?></h3>
                                        <p class="mb-2"><?= $this->renderSection('h3desc') ?></p>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <!-- <div class="breadcrumbs"><a href="#">Home </a>
                                        <span><i class="fi fi-rr-angle-small-right"></i></span>
                                        <a href="#">Dashboard</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $this->renderSection('content') ?>
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="copyright">
                                    <p>© Copyright
                                        <script>
                                            var CurrentYear = new Date().getFullYear()
                                            document.write(CurrentYear)
                                        </script>
                                        <a href="#">TrackWise</a> I All Rights Reserved
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fi fi-brands-facebook"></i></a></li>
                                        <li><a href="#"><i class="fi fi-brands-twitter"></i></a></li>
                                        <li><a href="#"><i class="fi fi-brands-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fi fi-brands-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

            <script src="<?= base_url('vendor/jquery/jquery.min.js'); ?>"></script>
            <script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
            <script src="<?= base_url('vendor/toastr/toastr.min.js'); ?>"></script>
            <!-- <script src="./vendor/toastr/toastr-init.js'); ?>"></script> -->
            <script src="<?= base_url('vendor/circle-progress/circle-progress.min.js'); ?>"></script>
            <script src="<?= base_url('vendor/circle-progress/circle-progress-init.js'); ?>"></script>
            <script src="<?= base_url('vendor/chartjs/chartjs.js'); ?>"></script>
            <script src="<?= base_url('js/plugins/chartjs-bar-income-vs-expense.js'); ?>"></script>
            <script src="<?= base_url('js/plugins/chartjs-bar-weekly-expense.js'); ?>"></script>
            <script src="<?= base_url('js/plugins/chartjs-profile-wallet.js'); ?>"></script>
            <script src="<?= base_url('js/plugins/chartjs-profile-wallet2.js'); ?>"></script>
            <script src="<?= base_url('js/plugins/chartjs-profile-wallet3.js'); ?>"></script>
            <script src="<?= base_url('js/plugins/chartjs-profile-wallet4.js'); ?>"></script>
            <script src="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
            <script src="<?= base_url('js/plugins/perfect-scrollbar-init.js'); ?>"></script>
            <script src="<?= base_url('vendor/circle-progress/circle-progress.min.js'); ?>"></script>
            <script src="<?= base_url('js/plugins/circle-progress-init.js'); ?>"></script>
            <script src="<?= base_url('js/scripts.js'); ?>"></script>
</body>

</html>