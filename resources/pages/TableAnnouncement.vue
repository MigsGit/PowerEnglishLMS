<template>

  <!-- Notices Table -->
    <div class="container notice-list overflow-auto">
        <DataTable
            :columns="columns"
            class="table table-striped table-responsive mt-2"
            ajax="/api/get_announcement_table"
            :options="{
                serverSide: true, //Serverside true will load the network
                columnDefs:[
                    // {orderable:false,target:[0]}
                ]
            }"
            ref="tableProcedureList"
        />
    </div>
</template>

<script setup>
    import {ref, reactive, onMounted, watch, nextTick} from 'vue';
    import DataTable from 'datatables.net-vue3'
    import DataTablesCore from 'datatables.net-bs5'
    DataTable.use(DataTablesCore)

    const tableProcedureList = ref()

    const columns =[
        { data: 'rawNumberList',    title: 'Number' },
        { data: 'rawAnnouncementList',  title: 'Title' },
        { data: 'created_at',       title: 'Registration Date'  },
        { data: 'views_count',       title: 'Views'  },
    ];
    onMounted(() => {
        /*
            axios.get('api/get_announcement_table')
            .then((res) => {
                console.log('dadasd');
            }).catch((err) => {

            });
              <th>Number</th>
                <th>Title</th>
                <th>Registration Date</th>
                <th>Views</th>
        */
    })
</script>