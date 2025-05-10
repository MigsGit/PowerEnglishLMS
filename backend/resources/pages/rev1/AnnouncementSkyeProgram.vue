<template>
    <div class="container mt-5">
        <!-- Announcement Content -->
        <div class="announcement-body p-4 border rounded shadow-sm bg-white">
            <!-- Announcement Header Table -->
            <CommunityHeader :createdAt="createdAt" :viewsCount="viewsCount" :descriptions="descriptions"/>
            <p>
                Hello Power English members!

                Power English is a program that will give you confidence in speaking English.

                Microsoft has announced that it will  officially end its video calling and chat app Skype service on May 5, 2025 .

                After hearing the news that the Skype program will be discontinued, we have received inquiries about future plans. First, we would like to inform you about Power English's new video call program.

                Power English is planning to switch to the 'Zoom' program after testing various video call programs and considering ease of use, security stability, and internet connection compatibility, as the Skype program service is discontinued .


                For members who are currently taking video English classes, we ask that  you install the new video call program Zoom, create an account, and add an account by Friday, April 25th .

                Please wait a moment  as detailed instructions on the Zoom program, program installation, account creation, and adding accounts will be provided separately.

                We apologize for any inconvenience caused by the change in video program for Power English video English classes due to the termination of Skype program service.

                We will work to make Zoom a more functional program and provide better video English classes.
            </p>
            <p>
                > Check out the detailed card company interest-free installment benefits:
                <a href="https://www.inicis.com/blog/archives/16302" target="_blank">https://www.inicis.com/blog/archives/16302</a>
            </p>
            <p>Thank you,<br>Power English.</p>
        </div>
    </div>
</template>
<script setup>
    import {defineProps} from 'vue'
    import CommunityHeader from '../CommunityHeader.vue';
    const props = defineProps({
        createdAt: {
            type:'string',
            required: true,
        },
        viewsCount: {
            type:'string',
            required: true,
        },
        descriptions: {
            type:'string',
            required: true,
        },
    })
</script>
