<template>
    <Navbar/>
    <!-- Hero Section -->
    <div class="hero-section text-center" v-if="pageLink == null">
        <div class="container">
            <h2 class="fw-bold">Learn Reliably</h2>
            <h2 class="fw-bold">Study Easily</h2>
            <ul class="list-unstyled text-start mx-auto" style="max-width: 500px;">
                <li>📌 We provide you with essential class</li>
                <li>📌Create your own perfect lesson schedule with just a few clicks.</li>
                <li>📌 Power English, a learning method that becomes a habit.</li>
            </ul>
        </div>
    </div>
</template>
<script setup>
    import Navbar from '../layouts/Navbar.vue';
    import Footer from '../layouts/Footer.vue';
</script>