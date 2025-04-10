<template>
    <div class="container-fluid px-4">
        <div class="card mt-5"  style="width: 100%;">
            <div class="card-body overflow-auto">
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Textbook</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Download and change textbooks</li>
                        </ol>
                        <div class="row">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="menu-1-tab" data-bs-toggle="tab" data-bs-target="#menu-1-tab-pane" type="button" role="tab" aria-controls="menu-1-tab-pane" aria-selected="true">Download and Change Textbooks</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="menu-2-tab" data-bs-toggle="tab" data-bs-target="#menu-2-tab-pane" type="button" role="tab" aria-controls="menu-2-tab-pane" aria-selected="false">1:1 Customized Lesson Request</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="menu-1-tab-pane" role="tabpanel" aria-labelledby="menu-1-tab" tabindex="0">
                                    <div class="row mt-4">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    Instructor Recommended Textbooks
                                                </div>
                                                <div class="card-body">
                                                    There are currently no recommended textbooks. (Please take the test to get textbook recommendations.)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-3">
                                            <div class="card">
                                                <div class="card-header">
                                                    List of ongoing courses
                                                </div>
                                                <div class="card-body">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                        <h3> List of Books</h3>
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    Laying the foundation
                                                </div>
                                                <div class="card-body">
                                                    <DataTable
                                                        :columns="columns"
                                                        class="table table-striped table-responsive mt-2"
                                                        ajax="/api/get_text_books_table"
                                                        :options="{
                                                            serverSide: true, //Serverside true will load the network
                                                            columnDefs:[
                                                                // {orderable:false,target:[0]}
                                                            ]
                                                        }"
                                                        ref="tableTextBooks"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="tab-pane fade" id="menu-2-tab-pane" role="tabpanel" aria-labelledby="menu-2-tab" tabindex="0">...</div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</template>

<script setup>
     import {
        ref,
        onMounted,
        reactive
    } from 'vue';
    const tableTextBooks = ref(null);
    const columns = [
        {
            data : "das" , title : 'title'
        },
        {
            data : "bbb" , title : 'title'
        },

    ];
</script>
