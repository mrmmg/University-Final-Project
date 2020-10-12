<!-- card section -->
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 99vh;">
        <div class="col-lg-5 col-md-8 col-sm-10">
            <div class="card" style="background-color: #2e3f68;opacity: 0.8;">
                <div class="card-body">
                    <div class="text-center text-light mb-5">
                        <h5>تعیین رمزعبور جدید</h5>
                    </div>
                    <form action="<?=baseUrl()?>resetpass" method="post">
                        <div class="form-group mb-3">
                            <label for="reset_pass" class="text-light">رمزعبور جدید</label>
                            <input type="password" class="form-control" id="reset_pass" name="reset_pass" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="reset_passconf" class="text-light">تکرار رمزعبور جدید</label>
                            <input type="password" class="form-control" id="reset_passconf" name="reset_passconf" required>
                        </div>
                        <div>
                            <button class="btn btn-outline-primary btn-block text-center align-content-center" type="submit"><h5 class="text-light">تغییر رمزعبور</h5></button>
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