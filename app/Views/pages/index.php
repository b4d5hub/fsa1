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
                                <div class="brand-logo m-0">
                                    <a href="/">
                                        <img src="./images/logo.png" alt="">
                                    </a>
                                </div>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav ms-auto demo-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#demo-intro">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#demo-pages">Pages</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#demo-widgets">Widgets</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#demo-features">Features</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#demo-review">Review</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#demo-support">Support</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-right">
                                    <div class="dark-light-toggle" onclick="themeToggle()">
                                        <span class="dark"><i class="fi fi-rr-eclipse-alt"></i></span>
                                        <span class="light"><i class="fi fi-rr-eclipse-alt"></i></span>
                                    </div>
                                    <a href="./signin" class="btn btn-primary" style="margin-right: 5px;">Login</a>
                                    <a href="./signup" class="btn btn-primary">Register</a>
                                
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demo-intro" id="demo-intro" data-scroll-index="0">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-md-6 my-5">
                        <div class="demo-intro-content">
                            <h1>Ekash - Personal Finance Management Admin Dashboard HTML Template</h1>
                            <p>Personal Finance Management refers to the process of managing an individual's or a
                                household's financial resources with the goal of achieving financial stability and meeting
                                both short-term and long-term financial objectives. </p>
                        </div>
                        <div class="demo-intro-counter">
                            <div class="row">
                                <div class="col-md-3">
                                    <h3>45+
                                        <span>Pages</span>
                                    </h3>
                                </div>
                                <div class="col-md-4">
                                    <h3>100+
                                        <span>Components</span>
                                    </h3>
                                </div>
                                <div class="col-md-3">
                                    <h3>300+
                                        <span>Widgets</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="demo-intro-btn">
                            <a href="#demo-pages" class="btn btn-primary me-3" data-scroll-nav="1">View Demo</a>
                            <a href="#" class="btn btn-outline-primary">Buy</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 py-md-5">
                        <div class="row intro-card">
                            <div class="col-xl-6 intro-card-up">
                                <img src="./images/card/1.png" alt="" />
                                <img src="./images/card/2.png" alt="" />
                                <img src="./images/card/3.png" alt="" />
                                <img src="./images/card/4.png" alt="" />
                                <img src="./images/card/5.png" alt="" />
                                <img src="./images/card/6.png" alt="" />
                                <img src="./images/card/7.png" alt="" />
                                <img src="./images/card/8.png" alt="" />
                                <img src="./images/card/9.png" alt="" />
                                <img src="./images/card/10.png" alt="" />
                                <img src="./images/card/11.png" alt="" />
                                <img src="./images/card/12.png" alt="" />
                                <img src="./images/card/13.png" alt="" />
                                <img src="./images/card/14.png" alt="" />
                                <img src="./images/card/15.png" alt="" />
                                <img src="./images/card/16.png" alt="" />
                                <img src="./images/card/17.png" alt="" />
                                <img src="./images/card/18.png" alt="" />
                                <img src="./images/card/19.png" alt="" />
                                <img src="./images/card/20.png" alt="" />
                                <img src="./images/card/37.png" alt="" />
                                <!-- <img src="./images/card/38.png" alt="" /> -->
                            </div>
                            <div class="col-xl-6 intro-card-up">
                                <img src="./images/card/21.png" alt="" />
                                <img src="./images/card/22.png" alt="" />
                                <img src="./images/card/23.png" alt="" />
                                <img src="./images/card/24.png" alt="" />
                                <img src="./images/card/25.png" alt="" />
                                <img src="./images/card/26.png" alt="" />
                                <img src="./images/card/27.png" alt="" />
                                <img src="./images/card/28.png" alt="" />
                                <img src="./images/card/29.png" alt="" />
                                <img src="./images/card/30.png" alt="" />
                                <img src="./images/card/31.png" alt="" />
                                <img src="./images/card/32.png" alt="" />
                                <img src="./images/card/33.png" alt="" />
                                <img src="./images/card/34.png" alt="" />
                                <img src="./images/card/35.png" alt="" />
                                <img src="./images/card/36.png" alt="" />
                                <img src="./images/card/39.png" alt="" />
                                <img src="./images/card/40.png" alt="" />
                            </div>
                        </div>
                        <!-- <div class="intro-demo_img">
                        <img src="./images/demo/intro.png" alt="" class="img-fluid">
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="demo section-padding" id="demo-pages">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center">
                            <span>Pages</span>
                            <h2>Explore a Package Loaded with Interactive Live Demos</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="demo_img">
                            <a href="./index.html" target="_blank">
                                <div class="img-wrap">
                                    <img src="./images/demo/dashboard.png" alt="" class="img-fluid">
                                </div>
                            </a>
                            <h4>Dashboard</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="demo_img">
                            <a href="./wallets.html" target="_blank">
                                <div class="img-wrap">
                                    <img src="./images/demo/wallets.png" alt="" class="img-fluid">
                                </div>
                            </a>
                            <h4>Wallets</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="demo_img">
                            <a href="./budgets.html" target="_blank">
                                <div class="img-wrap">
                                    <img src="./images/demo/budgets.png" alt="" class="img-fluid">
                                </div>
                            </a>
                            <h4>Budgets</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="demo_img">
                            <a href="./goals.html" target="_blank">
                                <div class="img-wrap">
                                    <img src="./images/demo/goals.png" alt="" class="img-fluid">
                                </div>
                            </a>
                            <h4>Goals</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="demo_img">
                            <a href="./profile.html" target="_blank">
                                <div class="img-wrap">
                                    <img src="./images/demo/profile.png" alt="" class="img-fluid">
                                </div>
                            </a>
                            <h4>Profile</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="demo_img">
                            <a href="./analytics.html" target="_blank">
                                <div class="img-wrap">
                                    <img src="./images/demo/analytics.png" alt="" class="img-fluid">
                                </div>
                            </a>
                            <h4>Analytics</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features section-padding" id="demo-features">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center">
                            <span>Features</span>
                            <h2>Extraordinary Features, Endless Flexibility</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rr-magic-wand"></i>
                            <h5>2 Theme Colors</h5>
                            <p>We have included 6 pre-defined Theme Colors with Elegant Admin.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rr-moon"></i>
                            <h5>Dark &amp; Light Sidebar</h5>
                            <p>Included Dark and Light Sidebar for getting desire look and feel.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rr-archive"></i>
                            <h5>45+ Page Templates</h5>
                            <p>Yes, we have 1 demos &amp; 45+ Pages per demo to make it easier.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rr-settings-sliders"></i>
                            <h5>150+ UI Components</h5>
                            <p>Almost 150+ UI Components being given with TrackWise Admin Pack.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-brands-bootstrap"></i>
                            <h5>Bootstrap 5x</h5>
                            <p>Its been made with Bootstrap 5 and full responsive layout.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rr-diamond"></i>
                            <h5>2000+ Font Icons</h5>
                            <p>Lots of Icon Fonts are included here in the package of Elegant Admin.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rr-laptop-mobile"></i>
                            <h5>Fully Responsive</h5>
                            <p>All the layout of Ekash Admin is Fully Responsive and widely
                                tested.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-brands-sass"></i>
                            <h5>SassBase CSS</h5>
                            <p>Our Css is written Sass Base to make your life easier.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rr-shuffle"></i>
                            <h5>Easy to Customize</h5>
                            <p>Customization will be easy as we understand your pain.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rr-chart-pie"></i>
                            <h5>Lots of Chart Options</h5>
                            <p>You name it and we have it, Yes lots of variations for Charts.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rs-table"></i>
                            <h5>Lots of Table Examples</h5>
                            <p>Data Tables are initial requirement and we added them.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rr-refresh"></i>
                            <h5>Regular Updates</h5>
                            <p>We are constantly updating our pack with new features.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rr-book"></i>
                            <h5>Detailed Documentation</h5>
                            <p>We have made detailed documentation, so it will easy to use.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="features-content">
                            <i class="fi fi-rs-user-headset"></i>
                            <h5>Dedicated Support</h5>
                            <p>We believe in supreme support is key and we offer that.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="review" id="demo-review">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center">
                            <span>Reviews</span>
                            <h2>Real Developers, Real Opinions – Read What Your Peers Have to Say!</h2>
                            <!-- <p>Refreshing my inbox, waiting for your mail </p> -->
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
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle" width="50" height="50">
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
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle" width="50" height="50">
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
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle" width="50" height="50">
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
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle" width="50" height="50">
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
                                        fantastically designed and coded. The author is super helpful and friendly. I would
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
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle" width="50" height="50">
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
                                        much better than the other products available in the market. I strongly recommend
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
                                            <img src="./images/envato.png" alt="" class="w-auto me-3 rounded-circle" width="50" height="50">
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
                                        react, the owner immediately respond to me and provide me the desired HTML template.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="customer-support section-padding" id="demo-support">
            <div class="container">
                <div class="row py-lg-5 justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center">
                            <span>Problem?</span>
                            <h2>Don't Worry, I am waiting your question</h2>
                            <p>Refreshing my inbox, waiting for your mail </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="customer-support-content">
                            <span><i class="fi fi-brands-whatsapp"></i></span>
                            <h4>+96897425480</h4>
                            <p>Without sleeping time, I am avaiable in Whstsapp. I recommend Whstsapp</p>
                            <a href="https://api.whatsapp.com/send?phone=0096897425480">Send Message <i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="customer-support-content">
                            <span><i class="fi fi-brands-skype"></i></span>
                            <h4>sporsho9</h4>
                            <p>Without sleeping time, I am avaiable in skype. I also recommend Skype</p>
                            <a href="skype:profile_name?sporsho9">Add Skype <i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="customer-support-content">
                            <span><i class="fi fi-rr-envelope"></i></span>
                            <h4>imsaifun@gmail.com</h4>
                            <p>When you send me email, I get notification, and quickly reply you</p>
                            <a href="mailto:imsaifun@gmail.com">Send Email <i class="la la-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="customer-support-content">
                            <span><i class="fi fi-rr-headset"></i></span>
                            <h4>Pre sale question</h4>
                            <p>You have need more design or customization? Dont worry about Quality</p>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSflTWPNbUwxUvIDLWx8TlzmDOWt1PgNCX4_TZ59yok-MlzXkg/viewform" target="_blank">Hire
                                Now <i class="la la-angle-right"></i></a>
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
                                <a href="#">Ekash</a> I All Rights Reserved
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