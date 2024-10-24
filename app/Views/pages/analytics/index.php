<?= $this->extend('layouts/analytics') ?>

<?= $this->section('title') ?>
Summary
<?= $this->endSection() ?>

<?= $this->section('h3title') ?>
Analytics
<?= $this->endSection() ?>

<?= $this->section('analytics-content') ?>
<div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="analytics-widget">
                                    <div class="widget-icon me-3 bg-primary"><span>
                                        <i class="fi fi-rr-mobile"></i></span>
                                    </div>
                                    <div class="widget-content">
                                        <p>Daily Average</p>
                                        <h3>$5470.36</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="analytics-widget">
                                    <div class="widget-icon me-3 bg-success"><span><i
                                                class="fi fi-rr-replace"></i></span>
                                    </div>
                                    <div class="widget-content">
                                        <p>Change</p>
                                        <h3>+47.36%</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="analytics-widget">
                                    <div class="widget-icon me-3 bg-warning"><span><i
                                                class="fi fi-rs-receipt"></i></span>
                                    </div>
                                    <div class="widget-content">
                                        <p>Total Transaction</p>
                                        <h3>354</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="analytics-widget">
                                    <div class="widget-icon me-3 bg-danger">
                                        <span><i class="fi fi-ss-confetti"></i></span>
                                    </div>
                                    <div class="widget-content">
                                        <p>Categories</p>
                                        <h3>40</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Weekly Expenses </h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="chartjsWeeklyExpenses"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
<?= $this->endSection() ?>