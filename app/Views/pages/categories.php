<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Categories
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
                                <h3>Dashboard</h3>
                                <p class="mb-2">Welcome TrackWise Finance Management</p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="breadcrumbs"><a href="#">Home </a>
                                <span><i class="fi fi-rr-angle-small-right"></i></span>
                                <a href="#">Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (session()->getFlashdata('errors')): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach (session()->getFlashdata('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success">
                    <ul>
                        <li><?= esc(session()->getFlashdata('success')) ?></li>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="col-xxl-4 col-xl-4 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create a new category</h4>
                    </div>
                    <div class="card-body">
                        <div class="create-new-category">
                            <form method="post" action="<?= route_to('submit-budget') ?>" class="row">
                                <div class="mb-3 col-9">
                                    <label class="form-label">Name </label>
                                    <input type="text" class="form-control" placeholder="category name">
                                </div>
                                <div class="mb-3 col-3">
                                    <label class="form-label">Color</label>
                                    <input type="color" class="colorpicker" />
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-8 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Expense Categories</h4>
                    </div>
                    <div class="card-body">
                        <div class="category-type">
                            <ul>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-emerald-500 fi fi-rr-barber-shop"></i>
                                            Beauty</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-teal-500 fi fi-rr-receipt"></i> Bills &
                                            Fees</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-cyan-500 fi fi-rr-car-side"></i> Car</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-sky-500 fi fi-rr-graduation-cap"></i>
                                            Education</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-blue-500 fi fi-rr-clapperboard-play"></i>
                                            Entertainment</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-indigo-500 fi fi-sr-family"></i> Family</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-violet-500 fi fi-rr-hamburger-soda"></i> Food
                                            &
                                            Drink</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-purple-500 fi fi-rr-money-bills-simple"></i>
                                            Salary</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-fuchsia-500 fi fi-rs-pineapple"></i>
                                            Groceries</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-pink-500 fi fi-rr-user-md"></i>
                                            Healthcare</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-purple-500 fi fi-rr-home"></i> Home</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-rose-500 fi fi-rs-shopping-bag"></i>
                                            Shopping</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-orange-500 fi fi-br-running"></i> Sports
                                        </span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-emerald-500 fi fi-rr-bowling"></i>
                                            Hobbies</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-teal-500 fi fi-rr-plane"></i> Travel</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-cyan-500 fi fi-rr-bus"></i>
                                            Transport</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="left-category">
                                        <span class="drag-icon"><i
                                                class="fi fi-ss-grip-lines"></i></span>
                                        <span class="category-icon"><i
                                                class="bg-indigo-500 fi fi-rr-briefcase"></i>
                                            Work</span>
                                    </div>
                                    <div class="right-category">
                                        <span><i class="fi fi-rs-pencil"></i></span>
                                        <span><i class="fi fi-rr-eye"></i></span>
                                        <span><i class="fi fi-rr-trash"></i></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>