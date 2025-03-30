<template>
    <div class="row justify-content-between mt-4">
        <div class="col-6">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header">
                                            <h3 class="text-center font-weight-light my-4">Non-member</h3>
                                            <p class="text-center">
                                                Enter the name and contact information you entered when applying for the test and click the confirmation button.
                                            </p>
                                        </div>
                                        <div class="card-body">
                                            <form class="user">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" v-model="infoLogin.email" ref="txtEmail" type="email" placeholder="Enter Name"/>
                                                    <label for="inputEmail">Name</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" v-model="infoLogin.password" ref="txtPassword" type="password" placeholder="+639..."/>
                                                    <label for="inputPassword">Phone Number</label>
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
                                            <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header">
                                            <h3 class="text-center font-weight-light my-4">Member</h3>
                                            <p class="text-center">
                                                If you applied for a test after signing up,
                                                log in with the ID you signed up with and check the test results.
                                            </p>
                                        </div>


                                        <div class="card-body">
                                            <form class="user">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" v-model="infoLogin.email" ref="txtEmail" type="email" placeholder="Enter ID"/>
                                                    <label for="inputEmail">ID</label>
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
                                            <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>

</template>
<script setup>
    const infoLogin = {
        email : 'migz@gmail.com',
        password : 'pmi12345',
    };
</script>