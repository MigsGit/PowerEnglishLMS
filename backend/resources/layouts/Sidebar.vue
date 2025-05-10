<template>
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="#">
                    <i class="fas fa-tachometer-alt" icon="fa-tachometer-alt"></i>&nbsp;Classroom
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#scheduleManagement" aria-expanded="false" aria-controls="scheduleManagement">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Schedule Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="scheduleManagement" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Change of time, instructor Navigation</a>
                        <a class="nav-link" href="#">Class postponed for one day</a>
                        <a class="nav-link" href="#">Pause& Resume Class</a>
                        <a class="nav-link" href="#">Direct class registration</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#courseRecommendation" aria-expanded="false" aria-controls="courseRecommendation">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Course Recommendation
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="courseRecommendation" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Download and change textbooks</a>
                        <a class="nav-link" href="#">1:1 Custom Request</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#customerServiceCenter" aria-expanded="false" aria-controls="customerServiceCenter">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Customer Service Center
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="customerServiceCenter" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#">1:1 Consultation Bulletin Board</a>
                        <a class="nav-link" href="#">Annoucement</a>
                    </nav>
                </div>
                <a class="nav-link" href="#">
                    <i class="fas fa-tachometer-alt" icon="fa-tachometer-alt"></i>&nbsp;Learning Report
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#myInformation" aria-expanded="false" aria-controls="myInformation">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    My Information
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="myInformation" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#">Course Details</a>
                        <a class="nav-link" href="#">Points Accumulation Details</a>
                        <a class="nav-link" href="#">Discount Coupon Cetails</a>
                        <a class="nav-link" href="#">Edit Member Information</a>
                        <a class="nav-link" href="#">Cancel Membership</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
        </div>
    </nav>
</template>