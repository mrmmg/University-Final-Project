<!-- card section -->
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 99vh;">
        <div class="col-lg-5 col-md-8 col-sm-10">
            <div class="card" style="background-color: #2e3f68;opacity: 0.8;">
                <div class="card-body">
                    <div class="text-center text-light mb-5">
                        <h5>ورود به حساب کاربری</h5>
                    </div>
                    <form action="<?=baseUrl()?>login" method="POST">
                        <div class="form-group mb-3">
                            <label for="email" class="text-light">آدرس ایمیل</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="pass" class="text-light">رمزعبور</label>
                            <input type="password" class="form-control" id="pass" name="password" required>
                        </div>
                        <div class="text-right mb-5"><a href="<?=baseUrl()?>resetmail" class="text-light">رمزعبور خود را فراموش کرده اید؟</a></div>
                        <div>
                            <button class="btn btn-outline-primary btn-block text-center align-content-center" type="submit"><h5 class="text-light">ورود</h5></button>
                        </div>
                    </form>
                    <!--
                    <div class="text-center text-light mt-3">
                        <p>Doesn't have a account?&nbsp;&nbsp;<a href="#" class="text-light">Sign Up!</a></p>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of card section -->