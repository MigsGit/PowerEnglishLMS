<template>
    <Navbar/>
    <!-- Hero Section -->
    <div class="hero-section text-center">
        <div class="container">
            <h2 class="fw-bold">Power English Notice</h2>
            <p>We provide you with essential class information, including the latest news and class cancellation schedules.</p>
            <ul class="list-unstyled text-start mx-auto" style="max-width: 500px;">
                <li>📌 Guide to website features and program updates</li>
                <li>📌 Notices on class cancellations and class-related matters</li>
                <li>📌 Information on price discounts and participation events</li>
            </ul>
        </div>
    </div>
    <TableAnnouncement/>
    <Footer/>
</template>

<script setup>
    import Navbar from '../layouts/Navbar.vue';
    import Footer from '../layouts/Footer.vue';
    import TableAnnouncement from './TableAnnouncement.vue';


</script>