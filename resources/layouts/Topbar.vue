<template>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <span class="navbar-brand ps-3" >
            <img src="../content/wise_education_logo.png" alt="" width="40" class="logo-icon center-block">   Power English
        </span>
        <!-- Sidebar Toggle-->

        <a id="sidebarToggle" style="cursor: pointer;"><i class="fas fa-bars"></i></a>
        <!-- Navbar Search-->

        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i> {{ storeAuth.name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" @click="logoutSession()" style="cursor: pointer;">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</template>

<script setup>
import { useAuthStore } from '../js/stores';
import Swal from 'sweetalert2';

const storeAuth = useAuthStore();

const logoutSession = async () => {
    await Swal.fire({
        title: 'Logout',
        text: 'Are you sure you want to logout?',
        icon: 'warning',
        allowOutsideClick: false,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes'
    }).then((result) => {
        if (result.isConfirmed) {
            storeAuth.logout();
        }
    })
};
</script>