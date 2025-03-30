<template>
    <!-- Header/Navigation -->
    <Navbar/>
    <!-- Main Content -->
    <div class="container my-5">
        <!-- Hero Section -->
        <div class="text-center mb-5 p-5 bg-light rounded-3">
            <h1 class="display-5 fw-bold">Power English that gives you the power to speak English!</h1>
            <p class="lead">Check class type and tuition → Fill out the class application form → Course registration completed</p>
        </div>

        <!-- Progress Steps -->
        <div class="d-flex align-items-center mb-5">
            <div class="d-flex align-items-center me-3">
                <div class="progress-step active">1</div>
                <span>Select class type</span>
            </div>
            <div class="flex-grow-1 border-top"></div>
            <div class="d-flex align-items-center mx-3">
                <div class="progress-step">2</div>
                <span>Select classes</span>
            </div>
            <div class="flex-grow-1 border-top"></div>
            <div class="d-flex align-items-center ms-3">
                <div class="progress-step">3</div>
                <span>Complete</span>
            </div>
        </div>

        <!-- Class Type Selection -->
        <div class="card mb-5">
            <div class="card-header bg-white">
                <h2 class="h5 mb-0">STEP 1: Select class type</h2>
                <p class="text-muted mb-0">Mon - Fri, 6:00 AM - 12:00 PM</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card course-card h-100 selected">
                            <div class="card-body text-center">
                                <i class="bi bi-camera-video fs-1 text-primary mb-3"></i>
                                <h3 class="h5">Video English Classes</h3>
                                <p class="text-muted">Face-to-face lessons via video call</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card course-card h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-telephone fs-1 text-secondary mb-3"></i>
                                <h3 class="h5">English lessons by phone</h3>
                                <p class="text-muted">Conversation practice via phone call</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Class Options -->
        <div class="card mb-5">
            <div class="card-header bg-white">
                <h2 class="h5 mb-0">STEP 2: Select the number of classes and duration</h2>
            </div>
            <div class="card-body">
                <!-- Duration Tabs -->
                <ul class="nav nav-tabs mb-4" id="durationTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="3month-tab" data-bs-toggle="tab" data-bs-target="#3month" type="button">3 months (5% discount)</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="6month-tab" data-bs-toggle="tab" data-bs-target="#6month" type="button">6+1 months <span class="badge bg-warning text-dark">Popular</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="12month-tab" data-bs-toggle="tab" data-bs-target="#12month" type="button">12+2 months</button>
                    </li>
                </ul>

                <div class="tab-content" id="durationTabContent">
                    <div class="tab-pane fade" id="3month" role="tabpanel">
                        <!-- 3 month content -->
                    </div>
                    <div class="tab-pane fade show active" id="6month" role="tabpanel">
                        <div class="row">
                            <!-- 5 times/week option -->
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 course-card">
                                    <span class="popular-badge badge rounded-pill px-3 py-2">Most Popular</span>
                                    <div class="card-body">
                                        <h3 class="h5">25 minutes 5 times a week</h3>
                                        <p class="text-muted">Monday-Friday</p>
                                        <p>140 classes</p>
                                        <div class="price-highlight mb-3">₩792,000</div>
                                        <p class="text-muted"><small>₩113,143 per month</small></p>
                                        <button class="btn btn-primary w-100">Select</button>
                                    </div>
                                </div>
                            </div>

                            <!-- 3 times/week option -->
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 course-card">
                                    <div class="card-body">
                                        <h3 class="h5">25 minutes 3 times a week</h3>
                                        <p class="text-muted">Monday/Wednesday/Friday</p>
                                        <p>84 classes</p>
                                        <div class="price-highlight mb-3">₩702,000</div>
                                        <p class="text-muted"><small>₩100,286 per month</small></p>
                                        <button class="btn btn-outline-primary w-100">Select</button>
                                    </div>
                                </div>
                            </div>

                            <!-- 2 times/week option -->
                            <div class="col-md-4 mb-4">
                                <div class="card h-100 course-card">
                                    <div class="card-body">
                                        <h3 class="h5">25 minutes twice a week</h3>
                                        <p class="text-muted">Tuesday/Thursday</p>
                                        <p>55 classes</p>
                                        <div class="price-highlight mb-3">₩636,000</div>
                                        <p class="text-muted"><small>₩90,857 per month</small></p>
                                        <button class="btn btn-outline-primary w-100">Select</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="12month" role="tabpanel">
                        <!-- 12 month content -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Selection -->
        <div class="card mb-5">
            <div class="card-header bg-white">
                <h2 class="h5 mb-0">STEP 2: Desired Course</h2>
            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card course-card selected">
                            <div class="card-body">
                                <h3 class="h5">Absolute Beginner</h3>
                                <p class="text-muted">A basic English conversation course for beginners who are just starting to speak English.</p>
                                <div class="d-flex justify-content-between">
                                    <span class="badge bg-light text-dark">Skype program</span>
                                    <span class="badge bg-light text-dark">6+1 months</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Number of classes</label>
                        <select class="form-select">
                            <option>140 classes (5 times/week)</option>
                            <option>84 classes (3 times/week)</option>
                            <option>55 classes (2 times/week)</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Summary -->
        <div class="card mb-5">
            <div class="card-header bg-white">
                <h2 class="h5 mb-0">Payment Summary</h2>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h3 class="h6">Exercise Absolute Beginner</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <strong>₩792,000</strong>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h3 class="h6">1 month free class</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <strong>₩0</strong>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="h5">Total payment amount</h3>
                    </div>
                    <div class="col-md-6 text-end">
                        <strong class="price-highlight">₩792,000</strong>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="d-flex justify-content-between mb-5">
            <button class="btn btn-outline-secondary">Back</button>
            <button class="btn btn-primary px-5">Apply for classes</button>
        </div>

        <!-- Payment Options -->
        <div class="card">
            <div class="card-header bg-white">
                <h2 class="h5 mb-0">Credit card interest-free installment plan</h2>
            </div>
            <div class="card-body">
                <p>Up to 1 month interest-free installment <a href="#">View Details</a></p>
            </div>
        </div>
    </div>
</template>
<script setup>
    import Navbar from '../../layouts/Navbar.vue';
    import Footer from '../../layouts/Footer.vue';
</script>
<style>
    .progress-step {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: #e9ecef;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
    }
    .progress-step.active {
        background-color: #0d6efd;
        color: white;
    }
    .course-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .course-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .course-card.selected {
        border: 2px solid #0d6efd;
        background-color: #f8f9fa;
    }
    .popular-badge {
        position: absolute;
        top: -10px;
        right: 10px;
        background-color: #ffc107;
        color: #212529;
    }
    .price-highlight {
        font-size: 1.5rem;
        font-weight: bold;
        color: #dc3545;
    }
    .nav-tabs .nav-link.active {
        font-weight: bold;
        border-bottom: 3px solid #0d6efd;
    }
</style>