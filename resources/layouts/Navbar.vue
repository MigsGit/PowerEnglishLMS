<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Power English</a>
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
                            <li><a class="dropdown-item" href="#">Apply for level test</a></li>
                            <li><a class="dropdown-item" href="#">Check test results</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Curriculum</a></li>
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
                            <li><a class="dropdown-item" href="#">Announement</a></li>
                            <li><a class="dropdown-item" href="#">Education Center News</a></li>
                            <li><a class="dropdown-item" href="#">Thank you teacher</a></li>
                            <li><a class="dropdown-item" href="#">Writing Correction Bulletin Board</a></li>
                            <li><a class="dropdown-item" href="#">Table</a></li>
                             
                        </ul>
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Course Registration
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Tuition fee confirmation and new application</a></li>
                            <li><a class="dropdown-item" href="#">Re-enrollment application</a></li>
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