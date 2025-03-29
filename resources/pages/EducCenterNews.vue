<template>
    <!-- Hero Section -->
    <div class="hero-section text-center" v-if="pageLink == null">
        <div class="container">
            <h2 class="fw-bold">Education Center News</h2>
            <ul class="list-unstyled text-start mx-auto" style="max-width: 500px;">
                <li>Aren't you
                curious about the daily lives of Power English instructors who always teach members with warm hearts and friendly smiles ?</li>
                <li>It's not just a mechanical class for learning English conversation, but also learning the culture of the place where the instructor is, and</li>
                <li>taking a peek into the instructor's daily life while taking the class with a friendly heart will eliminate English stress and</li>
                <li>allow you to study English with a more relaxed mind. We will also tell you about</li>
                <li>special events held at the call center and stories about Baguio, where the center is located .</li>
            </ul>
        </div>
    </div>
   <div class="container my-4">
        <h5 class="mb-3">Total 103 Items Page 1</h5>
        
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card">
                    <img src="image1.jpg" class="card-img-top" alt="Best Teacher Award">
                    <div class="card-body">
                        <h6 class="fw-bold">Best Teacher Award 4th Quarter 2019!! [0]</h6>
                        <p class="mb-1"><strong>Author:</strong> Power English</p>
                        <p class="mb-1"><strong>Registration Date:</strong> 2020-01-28</p>
                        <p class="mb-0"><strong>Check:</strong> 7309</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col">
                <div class="card">
                    <img src="image2.jpg" class="card-img-top" alt="Christmas Party">
                    <div class="card-body">
                        <h6 class="fw-bold">2019 CHRISTMAS PARTY !! [1]</h6>
                        <p class="mb-1"><strong>Author:</strong> Power English</p>
                        <p class="mb-1"><strong>Registration Date:</strong> 2019-12-17</p>
                        <p class="mb-0"><strong>Check:</strong> 6603</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card">
                    <img src="image3.jpg" class="card-img-top" alt="Halloween Event">
                    <div class="card-body">
                        <h6 class="fw-bold">Please join us for the 2019 Halloween event ^^ [51]</h6>
                        <p class="mb-1"><strong>Author:</strong> Power English</p>
                        <p class="mb-1"><strong>Registration Date:</strong> 2019-11-01</p>
                        <p class="mb-0"><strong>Check:</strong> 6401</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card">
                    <img src="image4.jpg" class="card-img-top" alt="Halloween Party">
                    <div class="card-body">
                        <h6 class="fw-bold">2019 HALLOWEEN PARTY !! [1]</h6>
                        <p class="mb-1"><strong>Author:</strong> Power English</p>
                        <p class="mb-1"><strong>Registration Date:</strong> 2019-11-01</p>
                        <p class="mb-0"><strong>Check:</strong> 6259</p>
                    </div>
                </div>
            </div>

            <!-- Additional Cards (Copy/Paste and Modify as needed) -->
            
        </div>
    </div>
</template>
<style>
    .card {
        border-radius: 15px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    .card img {
        height: 180px;
        object-fit: cover;
    }
    .card-body {
        padding: 15px;
    }
</style>
