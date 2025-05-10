<template>
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
    })
</script>
