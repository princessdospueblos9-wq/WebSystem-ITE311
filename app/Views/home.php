<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<div class="row">
    <div class="col-12">
        <div class="jumbotron bg-primary text-white p-5 rounded mb-4">
            <h1 class="display-4">Welcome to DOSPUEBLOS!</h1>
            <p class="lead">Your trusted platform for all your needs.</p>
            <hr class="my-4">
            <p>Discover amazing features and services designed just for you.</p>
            <a class="btn btn-light btn-lg" href="#" role="button">Get Started</a>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="row">
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi bi-lightning-charge text-primary" style="font-size: 3rem;"></i>
                <h5 class="card-title mt-3">Fast & Reliable</h5>
                <p class="card-text">Experience lightning-fast performance with our optimized platform.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi bi-shield-check text-success" style="font-size: 3rem;"></i>
                <h5 class="card-title mt-3">Secure</h5>
                <p class="card-text">Your data is protected with enterprise-grade security measures.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi bi-people text-info" style="font-size: 3rem;"></i>
                <h5 class="card-title mt-3">Community</h5>
                <p class="card-text">Join thousands of satisfied users in our growing community.</p>
            </div>
        </div>
    </div>
</div>

<!-- Additional Content -->
<div class="row mt-5">
    <div class="col-12">
        <h2 class="text-center mb-4">Why Choose DOSPUEBLOS?</h2>
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-3"></i>
                        Easy to use interface
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-3"></i>
                        24/7 customer support
                    </li>
                    <li class="list-group-item d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-3"></i>
                        Regular updates and improvements
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="alert alert-info">
                    <h4 class="alert-heading">New Features!</h4>
                    <p>Check out our latest updates and new features that make DOSPUEBLOS even better.</p>
                    <hr>
                    <p class="mb-0">Stay tuned for more exciting announcements!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
