<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Support
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
                                        <h3>Support</h3>
                                        <p class="mb-2">Welcome TrackWise Finance Management</p>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="breadcrumbs"><a href="#">Home </a>
                                        <span><i class="fi fi-rr-angle-small-right"></i></span>
                                        <a href="#">Support</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Your Ticket</h4>
                                <a href="support-create-ticket.html" class="btn btn-primary">Create Ticket</a>
                            </div>
                            <div class="card-body height-200 d-flex align-items-center justify-content-center">
                                <p class="mt-5">You have no ticket yet! Create one by hitting the <a
                                        href="support-create-ticket.html" class="text-primary">Create
                                        Button</a> </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Your Ticket Notification</h4>
                                <a href="#" class="text-warning">Clear All Notification</a>
                            </div>
                            <div class="card-body">
                                <p>Opps sorry, There are no notification to show </p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Tickets</h4>
                            </div>
                            <div class="card-body">
                                <div class="ticket-list">
                                    <a href="support-ticket-details.html">
                                        <div>
                                            <h5>I’m having issues claming with my daily hours <span
                                                    class="badge badge-success">OPEN</span></h5>
                                            <p>Posted on 24 June 2024</p>
                                        </div>
                                        <span><i class="fi fi-ss-angle-right"></i></span>
                                    </a>
                                    <a href="support-ticket-details.html">
                                        <div>
                                            <h5>I’m having issues claming with my daily hours <span
                                                    class="badge badge-success">OPEN</span></h5>
                                            <p>Posted on 24 June 2024</p>
                                        </div>
                                        <span><i class="fi fi-ss-angle-right"></i></span>
                                    </a>
                                    <a href="support-ticket-details.html">
                                        <div>
                                            <h5>I’m having issues claming with my daily hours <span
                                                    class="badge badge-success">OPEN</span></h5>
                                            <p>Posted on 24 June 2024</p>
                                        </div>
                                        <span><i class="fi fi-ss-angle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
<?= $this->endSection() ?>