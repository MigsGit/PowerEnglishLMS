<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="../content/wise_education_logo.jpg" alt="" width="40" class="logo-icon center-block">   Power English
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Level Test
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><router-link class="dropdown-item" :to="{ name: 'Schedule' }">Apply for level test</router-link></li>
                            <li><router-link class="dropdown-item" :to="{ name: 'Search' }">Check test results</router-link></li>
                        </ul>
                    </li>
                    <li class="nav-item"><router-link class="nav-link" :to="{ name: 'Curriculum' }">Curriculum</router-link></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Teaching Method
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">English on the phone</a></li>
                            <li><a class="dropdown-item" href="#">Video English</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Instructor</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Community
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><router-link class="dropdown-item" :to="{ name: 'AnnouncementMainPage' }">Announcement</router-link></li>
                            <li><router-link class="dropdown-item" :to="{ name: 'EducCenterNews' }">Education Center News</router-link></li>
                            <li><router-link class="dropdown-item" :to="{ name: 'ThankyouTeacher' }">Thank you teacher</router-link></li>
                            <li><router-link class="dropdown-item" :to="{ name: 'BulletinMainPage' }">Writing Correction Bulletin Board</router-link></li>
                            <li><router-link class="dropdown-item" :to="{ name: 'CourseReviewMainPage' }">Course Review</router-link></li>
                        </ul>
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Course Registration
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><router-link class="dropdown-item" :to="{ name: 'TuitionFee' }">Tuition fee confirmation and new application</router-link></li>
                            <li><router-link class="dropdown-item" :to="{ name: 'Login' }">Re-enrollment application</router-link></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <router-link class="btn btn-primary ms-2" :to="{ name: 'Login' }">
                           My Page
                        </router-link>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>