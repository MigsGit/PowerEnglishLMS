<template>
    <Navbar/>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <div class="card-body">
                                    <form class="user" @submit.prevent="sigin">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" v-model="infoLogin.email" ref="txtEmail" type="email" placeholder="name@example.com"/>
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" v-model="infoLogin.password" ref="txtPassword" type="password" placeholder="Password"/>
                                            <label for="inputPassword">Passwords</label>

                                            <!-- <div v-if="this.errorMsg != null" class="invalid-feedback">
                                            </div> -->
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a data-bs-toggle="modal" data-bs-target="#modalUserInfo">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!--
        MODAL
     -->
    <!-- Modal -->
    <div class="modal fade" id="modalUserInfo" ref="modalUserInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post"  @submit.prevent="fnSaveUserInfo()" ref="formUser">
                    <div class="modal-body">
                        <input type="hidden" ref="data_id" v-model="frmUserInfo.data_id" class="form-control mb-3" placeholder="ID">
                        <input type="text" ref="full_name" v-model="frmUserInfo.full_name" class="form-control mb-3" placeholder="Full Name">
                        <input type="text" ref="email" v-model="frmUserInfo.email" class="form-control mb-3" placeholder="Email">
                        <!-- <input type="text" ref="password" v-model="frmUserInfo.password" class="form-control mb-3" placeholder="Password"> -->
                        <!-- <input type="text" ref="confirm_password" v-model="frmUserInfo.confirm_password" class="form-control mb-3" placeholder="Confirm Password"> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="Submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script setup>
    import {ref, onMounted} from 'vue';
    import Navbar from '../layouts/Navbar.vue';
    import Footer from '../layouts/Footer.vue';
    import {useAuthStore} from "../js/stores";

    const getUserInfo = ref(null)
    const modalUserInfo = ref(null)
    const frmUserInfo = ref({})
    const formUser = ref(null);
    const full_name = ref(null)
    const email = ref(null)
    const tableUserInfo = ref(null)

    let objModalUserInfo = null;

    const infoLogin = {
        email : 'migz@gmail.com',
        password : 'pmi12345',
    };
    const storeAuth = useAuthStore();

    const sigin = async () => {
        storeAuth.login(infoLogin);

    };
    // objModalUserInfo.show();
    async function fnSaveUserInfo(event){
        try {
            // event.preventDefault();
            let response = await axios.post('save_user_info',frmUserInfo.value)
            // console.log(response)
            objModalUserInfo.hide();
            Swal.fire({
                    icon: "success",
                    title: "Saved Successfully",
                    showConfirmButton: false,
                    timer: 1500,
            });

        }catch (err) {
            let errorStatus = err.response.status
            let errorMessage = err.response.data.errors
            console.log('dasdasdasdasd',err);
            if(errorStatus === 422){
                if(frmUserInfo.value.full_name){
                    full_name.value.classList.remove('is-invalid')
                    full_name.value.title = "";
                }else{
                    full_name.value.classList.add('is-invalid')
                    full_name.value.title = errorMessage.full_name[0];
                }
                if(frmUserInfo.value.email){
                    email.value.classList.remove('is-invalid')
                    email.value.title = "";
                }else{
                    email.value.classList.add('is-invalid')
                    email.value.title = errorMessage.email[0];
                }
            }else{
                alert('Invalid Input ! ')
            }
        }
    }
    onMounted(() => {
        objModalUserInfo = new Modal(modalUserInfo.value);
        console.log(objModalUserInfo);

        modalUserInfo.value.addEventListener('hidden.bs.modal',function (event){
            // frmUserInfo.value.full_name = ''
            // console.log(frmUserInfo.value.full_name = '');
            frmUserInfo.value.data_id = ''
            frmUserInfo.value.full_name = ''
            frmUserInfo.value.email = ''
            full_name.value.classList.remove('is-invalid')
            full_name.value.title = "";
            email.value.classList.remove('is-invalid')
            email.value.title = "";
            /*
                <input type="hidden" ref="data_id" v-model="frmUserInfo.data_id" class="form-control mb-3" placeholder="ID">
                <input type="text" ref="full_name" v-model="frmUserInfo.full_name" class="form-control mb-3" placeholder="Full Name">
                <input type="text" ref="email" v-model="frmUserInfo.email" class="form-control mb-3" placeholder="Email">
            */

        })
    });


</script>

