<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Categories
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Categories
<?= $this->endSection() ?>

<?= $this->section('h3desc') ?>
<!-- /// -->
<?= $this->endSection() ?>


<?= $this->section('content') ?>

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
                    <form method="post" action="<?= base_url('/categories/add') ?>" class="row">
                        <div class="mb-3 col-9">
                            <label class="form-label">Name </label>
                            <input type="text" name="name" class="form-control" placeholder="category name">
                        </div>
                        <div class="mb-3 col-3">
                            <label class="form-label">Color</label>
                            <input type="color" name="color" class="colorpicker" />
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
                <h4 class="card-title">Categories</h4>
            </div>
            <div class="card-body">
                <div class="category-type">
                    <ul>
                        <?php foreach ($categories as $category): ?>
                            <li>
                                <div class="left-category">
                                    <span class="drag-icon"><i class="fi fi-ss-grip-lines"></i></span>
                                    <span class="category-icon">
                                        <i style="background: <?= esc($category['color']) ?>;"></i>
                                        <?= esc($category['name']) ?>
                                    </span>
                                </div>
                                <div class="right-category">
                                    <form action="<?= base_url('/categories/delete/' . $category['id']) ?>" method="post" style="display:inline;">
                                        <button type="submit" style="background:none; border:none; color:inherit;" onclick="return confirm('Are you sure you want to delete this category?')">
                                            <span><i class="fi fi-rr-trash"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?= $this->endSection() ?>