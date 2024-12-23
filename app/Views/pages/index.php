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

<body class="demo">
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
        <div class="header landing">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg">
                                <!-- Brand Logo -->
                                <div class="brand-logo m-0">
                                    <a href="/">
                                        <img src="./images/logo.png" alt="">
                                    </a>
                                </div>

                                <!-- Burger Button -->
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <!-- Navbar Collapse -->
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <!-- Navigation Links -->
                                    <ul class="navbar-nav ms-auto demo-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#intro">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#features">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#faq">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#review">Reviews</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact-us">Contact</a>
                                        </li>
                                    </ul>

                                    <!-- Login/Register or Dashboard Buttons -->
                                    <div class="header-right d-flex mt-3 mt-lg-0 justify-content-center">
                                        <!-- <div class="dark-light-toggle ps-2 me-3" onclick="themeToggle()">
                                            <span class="dark"><i class="fi fi-rr-eclipse-alt"></i></span>
                                            <span class="light"><i class="fi fi-rr-eclipse-alt"></i></span>
                                        </div> -->
                                        <?php if ($userId): ?>
                                            <a href="./dashboard" class="btn btn-primary me-2">Dashboard</a>
                                        <?php else: ?>
                                            <a href="./signin" class="btn btn-primary me-2">Login</a>
                                            <a href="./signup" class="btn btn-primary">Register</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demo-intro" id="intro" data-scroll-index="0">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-md-6 my-5">
                        <div class="demo-intro-content">
                            <h1>TrackWise - Personal Finance Management App</h1>
                            <p>Take Control of Your Finances with TrackWise.
                                <br>Effortlessly track expenses, set budgets, and monitor your financial health—all in
                                one place.
                            </p>
                        </div>
                        <div class="demo-intro-btn">
                            <a href="/signin" class="btn btn-primary me-3" data-scroll-nav="1">Get Started</a>
                            <a href="#features" data-scroll-nav="2" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 py-md-5">
                        <div class="row intro-card">
                            <div class="col-xl-6 intro-card-up">
                                <img src="./images/card/1.png" alt="" />
                                <img src="./images/card/3.png" alt="" />
                                <img src="./images/card/5.png" alt="" />
                                <img src="./images/card/6.png" alt="" />
                                <img src="./images/card/9.png" alt="" />
                                <img src="./images/card/12.png" alt="" />
                                <img src="./images/card/16.png" alt="" />
                                <img src="./images/card/17.png" alt="" />
                                <img src="./images/card/18.png" alt="" />
                                <img src="./images/card/19.png" alt="" />
                            </div>
                            <div class="col-xl-6 intro-card-up">
                                <img src="./images/card/21.png" alt="" />
                                <img src="./images/card/23.png" alt="" />
                                <img src="./images/card/24.png" alt="" />
                                <img src="./images/card/29.png" alt="" />
                                <img src="./images/card/30.png" alt="" />
                                <img src="./images/card/31.png" alt="" />
                                <img src="./images/card/34.png" alt="" />
                                <img src="./images/card/35.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demo section-padding" id="demo-pages">
            <div class="container">
                <div class="row py-lg-2 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center">
                            <h2>Get Started In 3 Easy Steps</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-content stepsbox">
                            <div class="imgbox">
                                <img src="/icons/remix-icon/icon_phone.svg" alt="Icon Phone">
                            </div>
                            <h4>Create Your Account</h4>
                            <p>Join TrackWise today! Creating your account is fast and easy.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-content stepsbox">
                            <div class="imgbox">
                                <img src="/icons/remix-icon/icon_chat.svg" alt="Icon Phone">
                            </div>
                            <h4>Set Your Budget</h4>
                            <p>Define your goals and track your spending.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-content stepsbox">
                            <div class="imgbox">
                                <img src="/icons/remix-icon/icon_invoice.svg" alt="Icon Phone">
                            </div>
                            <h4>Manage Your Finances</h4>
                            <p>Easily oversee all your expenses and savings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-5" id="faq">
            <div class="container">
                <div>
                    <div class="row row-gap-32">
                        <div class="col-12 col-xl-6">
                            <div class="bg-img"> <img
                                    src="https://avitex.vn/html/finatex/assets/images/component/item1.png" alt=""></div>
                        </div>
                        <div class="col-12 col-xl-6 bg-surface position-relative">
                            <div class="content-main">
                                <h3>Frequently Asked questions</h3>
                                <div class="list-question mt-32 position-static">
                                    <div
                                        class="question-item shadow-sm cursor-pointer mt-4 px-4 rounded border border-light">
                                        <div class="question-item-main d-flex justify-content-between pt-2 pb-2 mb-0">
                                            <h4>Which device can I use to enter your service?</h4><i
                                                class="fi-rr-plus"></i>
                                        </div>
                                        <div class="content-question">
                                            <div class="border-line"></div>
                                            <div class="pt-3 pb-3">You can access our service from any device with an
                                                internet connection.</div>
                                        </div>
                                    </div>
                                    <div
                                        class="question-item shadow-sm cursor-pointer mt-4 px-4 rounded border border-light">
                                        <div class="question-item-main d-flex justify-content-between pt-2 pb-2 mb-0">
                                            <h4>What are your products and services?</h4><i class="fi-rr-plus"></i>
                                        </div>
                                        <div class="content-question">
                                            <div class="border-line"></div>
                                            <div class="pt-3 pb-3">Our products and services include Lorem ipsum dolor
                                                sit amet consectetur adipisicing elit.</div>
                                        </div>
                                    </div>
                                    <div
                                        class="question-item shadow-sm cursor-pointer mt-4 px-4 rounded border border-light open">
                                        <div class="question-item-main d-flex justify-content-between pt-2 pb-2 mb-0">
                                            <h4>Lorem ipsum dolor sit amet consectetur, adipisicing elit?</h4><i
                                                class="fi-rr-plus"></i>
                                        </div>
                                        <div class="content-question">
                                            <div class="border-line"></div>
                                            <div class="pt-3 pb-3">Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Ipsum incidunt maxime ducimus repellendus dolor! Quo cupiditate
                                                tenetur enim distinctio nam, eveniet quisquam itaque non corrupti,
                                                similique fuga explicabo maxime quis.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features" id="features">
            <div class="container">
                <div class="row py-lg-1 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center">
                            <span>Key Features</span>
                            <h2>Amazing Features You Will Get</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-content">
                            <i class="fi fi-rr-search-dollar"></i>
                            <h4>Expense Tracking</h4>
                            <p>Easily log and categorize your expenses.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-content">
                            <i class="fi fi-rr-settings-sliders"></i>
                            <h4>Budget Setting</h4>
                            <p>Set monthly budgets and receive alerts.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-content">
                            <i class="fi fi-rr-chart-pie"></i>
                            <h4>Insights</h4>
                            <p>Detailed monthly reports.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-content">
                            <i class="fi fi-rr-search-dollar"></i>
                            <h4>Expense Tracking</h4>
                            <p>Easily log and categorize your expenses.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-content">
                            <i class="fi fi-rr-settings-sliders"></i>
                            <h4>Budget Setting</h4>
                            <p>Set monthly budgets and receive alerts.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-content">
                            <i class="fi fi-rr-chart-pie"></i>
                            <h4>Insights</h4>
                            <p>Detailed monthly reports.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="review" id="review">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center">
                            <span>Reviews</span>
                            <h2>Real Users, Real Opinions – Read What Your Peers Have to Say!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="testimonial-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle"
                                                width="50" height="50">
                                            <div>
                                                <h6>TpRx_Filo</h6>
                                                <p> Code Quality</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>To start :
                                        Great support! responsive and attentive to a problem I had.
                                        Functional and super designed site.
                                        I highly recommend !
                                        Thanks You Very Much</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="testimonial-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle"
                                                width="50" height="50">
                                            <div>
                                                <h6>djjaron</h6>
                                                <p>Feature Availability</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Great full feature UI/UX that covers all user flows and paths. The components are
                                        well organized and the stylization is cleanly coded. A+++++</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="testimonial-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle"
                                                width="50" height="50">
                                            <div>
                                                <h6> creativeorange3</h6>
                                                <p> Design Quality</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Really professional product and creator is there to help whenever you encounter
                                        problems.
                                        Amazing response time too!
                                        Definitely will work again with Prexius!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="testimonial-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle"
                                                width="50" height="50">
                                            <div>
                                                <h6> mciluke123</h6>
                                                <p>Customer Support</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>If I could give 6 stars I would. Excellent experience with this template,
                                        fantastically designed and coded. The author is super helpful and friendly. I
                                        would
                                        recommend this template and this author to a friend for sure. Thanks!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="testimonial-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle"
                                                width="50" height="50">
                                            <div>
                                                <h6>Minshan Cui</h6>
                                                <p>Features avaibility</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>The quality of design is excellent, customizability and
                                        flexibility
                                        much better than the other products available in the market. I strongly
                                        recommend
                                        the AdminMart to
                                        other buyers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="testimonial-content">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle"
                                                width="50" height="50">
                                            <div>
                                                <h6>gsotirov</h6>
                                                <p>Customer Support</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex">
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                                <i class="fi fi-ss-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Amazing design and even though i purchased it by mistake as i didn't see that is
                                        react, the owner immediately respond to me and provide me the desired HTML
                                        template.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-us" id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Contact Form for Reclamation -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Contact Us</h4>
                            </div>
                            <div class="card-body">
                                <?php if (session()->getFlashdata('message')): ?>
                                    <div class="alert alert-success">
                                        <?= session()->getFlashdata('message') ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (session()->getFlashdata('alert')): ?>
                                    <div class="alert alert-danger">
                                        <?= session()->getFlashdata('alert') ?>
                                    </div>
                                <?php endif; ?>
                                <!-- Reclamation Form -->
                                <form action="/submit-reclamation" method="post">
                                    <?= csrf_field() ?> <!-- CSRF Token for security -->

                                    <div class="col-12 mb-3">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" id="name" name="subject" required>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="email">Email</label>
                                        <input min="10px" type="text" class="form-control" id="email" name="email" required>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <label for="message">Message </label>
                                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                                    </div><br><br>

                                    <div class="col-12 mb-3">
                                        <button type="submit" class="btn btn-primary">Envoyer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="customer-support section-padding" id="support">
            <div class="container">
                <div class="row">
                    <div class="card p-4 col-lg-12">
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="">
                                <div class="mb-20">
                                    <h2 class="">Let’s Download Our Mobile App!</h2>
                                </div>
                                <p class="">Lorem ipsum dolor sit amet consectet adipiscing</p>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-12 col-lg-12">
                            <div class="p-relative d-flex justify-content-lg-end">
                                <div class="mobile__app-download is-black">
                                    <a class="app__download" href="#">
                                        <img src="images/play-store.png" alt="image not found">
                                    </a>
                                    <a class="app__download" href="#">
                                        <img src="images/apple-store.png" alt="image not found">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-landing">
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
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/scripts.js"></script>
</body>

</html>