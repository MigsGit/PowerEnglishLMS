<template>
    <div class="container mt-5">
        <!-- Announcement Content -->
        <div class="announcement-body p-4 border rounded shadow-sm bg-white">
            <!-- Announcement Header Table -->
            <div class="announcement-header p-3">
                <table class="table">
                    <tr class="table-light">
                        <th class="fw-bold">
                            <h5 class="fw-bold text-primary text-start">
                                {{descriptions}}
                            </h5>
                        </th>
                        <th class="text-end">📅 Date: <span class="text-secondary">{{createdAt}}</span> | 👁 Views: <span class="text-secondary">{{viewsCount}}</span></th>
                    </tr>
                </table>
            </div>
            <div v-html="message"></div>
        </div>
    </div>
</template>
<script setup>
    import {defineProps} from 'vue'
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
