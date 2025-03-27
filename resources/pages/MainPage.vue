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

    <!-- Notices Table -->
    <div class="container notice-list">
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Number</th>
                    <th>Title</th>
                    <th>Registration Date</th>
                    <th>Views</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>396</td>
                    <td>[Guide] Installing the ZOOM program and creating an account</td>
                    <td>2025-03-27</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>395</td>
                    <td>[Notice] Video English classes due to the end of the Skype program</td>
                    <td>2025-03-13</td>
                    <td>115</td>
                </tr>
                <tr>
                    <td>394</td>
                    <td>Information on card company interest-free installment</td>
                    <td>2025-03-01</td>
                    <td>115</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="container text-center my-4">
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">«</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </nav>
    </div>
    <Footer/>
</template>

<script setup>
    import Navbar from '../layouts/Navbar.vue';
     import Footer from '../layouts/Footer.vue';
</script>