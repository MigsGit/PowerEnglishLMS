<template>
    <Navbar/>
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4">Are you wondering which course is right for you?</h1>
            <p class="lead">First, choose the course you like.</p>
            <p>Power English allows you to change the curriculum at any time with a simple click on the homepage.</p>
        </div>

        <div class="row mb-5">
            <div class="col-md-8 mx-auto">
                <div class="card border-0 shadow">
                    <div class="card-header bg-primary text-white">
                        <h2 class="h5 mb-0">Guide</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Living the foundation</li>
                            <li class="list-group-item">Free talking</li>
                            <li class="list-group-item">Dobies</li>
                            <li class="list-group-item">Regular conversation</li>
                            <li class="list-group-item">Business</li>
                            <li class="list-group-item">Proposing for the exam</li>
                            <li class="list-group-item">etc</li>
                            <li class="list-group-item">Reachover write</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mb-4">Basic Work Configuration</h2>
        <p class="mb-5">Understand and use the meaning of essential note to build a solid foundation bar...</p>

        <div class="row g-4">
            <!-- Foundation Course -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 course-card recommended-card shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 card-title">Foundation Course</h3>
                        <p class="card-text">Build a solid foundation for English learning.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge recommended-badge rounded-pill">Recommended</span>
                            <span class="badge level-badge rounded-pill">Level 1-2</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Free Talking 1 (Yellow) -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 course-card shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 card-title">Free Talking 1 (Yellow)</h3>
                        <p class="card-text">Intermediate course to help you develop the ability to freely express yourself.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge recommended-badge rounded-pill">Recommended</span>
                            <span class="badge level-badge rounded-pill">Level 3-9</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Free Talking 2 (Red) -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 course-card shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 card-title">Free Talking 2 (Red)</h3>
                        <p class="card-text">Practice understanding and speaking on international topics.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge level-badge rounded-pill">Level 10-12</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Free Talking 3 (Blue) -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 course-card shadow-sm">
                    <div class="card-body">
                        <h3 class="h5 card-title">Free Talking 3 (Blue)</h3>
                        <p class="card-text">Advanced conversations to fluently share your thoughts.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge level-badge rounded-pill">Level 13-15</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
 import Navbar from '../../layouts/Navbar.vue';
 import Footer from '../../layouts/Footer.vue';
</script>
<style>
    .recommended-card {
        border-left: 5px solid #28a745;
    }
    .recommended-badge {
        background-color: #28a745;
        color: white;
    }
    .level-card {
        border-left: 5px solid #fd7e14;
    }
    .level-badge {
        background-color: #fd7e14;
        color: white;
    }
    .course-card {
        transition: transform 0.2s;
    }
    .course-card:hover {
        transform: translateY(-5px);
    }
</style>