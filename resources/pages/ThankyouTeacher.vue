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
    <div class="container mt-4">
        <h2 class="text-center">List</h2>
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <tbody>
                 <tr>
                    <td>
                        <tr>
                            <td rowspan="2" width="110">
                                <img src="https://www.pweng.net/uploads/teacher-present/data/beth-1605073781.jpeg" class="img-fluid" alt="Teacher Image">
                            </td>
                            <td>
                                <h5 class="fw-bold">THANK YOU FROM TEACHER BETH =) [1]</h5>
                                <p>Manager: JE* | Registration Date: 2020-11-11 | Views: 1531</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table table-borderless mb-0">
                                    <tr>
                                        <td>More details can go here...</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                     </td>
                  </tr>
                   <tr>
                    <td>
                        <tr>
                            <td rowspan="2" width="110">
                                <img src="https://www.pweng.net/uploads/teacher-present/data/beth-1605073781.jpeg" class="img-fluid" alt="Teacher Image">
                            </td>
                            <td>
                                <h5 class="fw-bold">THANK YOU FROM TEACHER BETH =) [1]</h5>
                                <p>Manager: JE* | Registration Date: 2020-11-11 | Views: 1531</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table table-borderless mb-0">
                                    <tr>
                                        <td>More details can go here...</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                     </td>
                  </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mt-4">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </nav>
    </div>
</template>
<style>
    .list-item {
        display: flex;
        align-items: center;
        padding: 15px;
        border-bottom: 1px solid #ddd;
    }
    .list-item img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 5px;
        margin-right: 15px;
    }
    .list-item .text-content {
        flex-grow: 1;
    }
    .pagination .page-item.active .page-link {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }
</style>
