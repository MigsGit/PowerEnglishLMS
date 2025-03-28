<template>
    <div class="container mt-5">
        <!-- Announcement Content -->
        <div class="announcement-body p-4 border rounded shadow-sm bg-white">
            <!-- Announcement Header Table -->
            <AnnouncementHeader/>
            <p>Hello Power English members!</p>
            <p>Power English is a program that will give you confidence in speaking English.</p>
            
            <p>
                Due to the termination of the SKYPE program used for video English classes, Power English video English classes 
                will be converted to <strong>the ZOOM program</strong>.
            </p>

            <div class="alert alert-warning">
                <strong>📅 Starting Date:</strong> Monday, April 28th  
            </div>

            <p>
                Power English <strong>will be conducting video English classes via the ZOOM program</strong>. The method for video calls 
                will change from ‘Skype Messenger’ to ‘Zoom Messenger.’
            </p>

            <p>
                Members taking online English classes should follow the link below to install Zoom, create an account, and add their instructor.
            </p>

            <div class="zoom-link p-3">
                <a href="https://buly.kr/8el5W8X" target="_blank" class="btn btn-primary">
                    ➤ Go to <strong>ZOOM Program Guide</strong>
                </a>
            </div>

            <p>
                The ZOOM program is free for PCs, smartphones, and tablets. Follow the installation instructions at 
                <a href="https://zoom.us/download" target="_blank">https://zoom.us/download</a>, then sign up for a membership.
            </p>

            <p>
                After registration, inform your instructor via Skype Messenger about your Zoom ID. The instructor will verify and add you as a 
                friend in Zoom Messenger.
            </p>

            <div class="alert alert-danger fw-bold">
                📌 Please add a new Zoom account with your instructor by <span class="text-dark">Friday, April 25th</span>.
            </div>

            <p>Thank you,<br>Power English.</p>
        </div>
    </div>
</template>
<script setup>
    import AnnouncementHeader from './AnnouncementHeader.vue';
</script>
