<template>
    <div class="container mt-5">
        <!-- Announcement Content -->
        <div class="announcement-body p-4 border rounded shadow-sm bg-white">
            <!-- Announcement Header Table -->
            <CommunityHeader :createdAt="createdAt" :viewsCount="viewsCount" :descriptions="descriptions"/>
            <p>
                Hello Power English members^^

                Power English is a program that will give you confidence in speaking English.

                We would like to express our gratitude to our precious Power English members for their warm interest and support, and we wish you a happy new year!

                Please refer to the information below for  the KG Inicis card company installment service  for March 2025  .

                Members who take  Power English  classes (3 months: 5% discount, 6 months: 1  additional month for free, 12 months:  2  additional months for free)  will receive a discount. Please refer to the interest-free installment plan information below when making payments.


                (Period) 2025.03.01 ~ 2025.03.31

                Hyundai Card/Lotte Card/Kookmin Card/Shinhan Card/Samsung Card/BC Card/Woori Card/NH Card/Hana Card/Jeonbuk Card/Gwangju Card

                When paying over 50,000 won, 2 to 3 months of installment payments are applied without separate application, only available to PG businesses (interest-free installment benefit)
            </p>
            <p>
                > Check out the detailed card company interest-free installment benefits:
                <a href="https://www.inicis.com/blog/archives/16302" target="_blank">https://www.inicis.com/blog/archives/16302</a>, then sign up for a membership.
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
        message: {
            type:'string',
            required: true,
        },

    })
</script>
