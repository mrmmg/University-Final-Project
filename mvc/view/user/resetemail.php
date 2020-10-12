<!-- card section -->
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 99vh;">
        <div class="col-lg-5 col-md-8 col-sm-10">
            <div class="card" style="background-color: #2e3f68;opacity: 0.8;">
                <div class="card-body">
                    <div class="text-center text-light mb-5">
                        <h5>لطفا ایمیل خود را جهت تغییر پسورد وارد نمایید.</h5>
                    </div>
                    <form action="<?=baseUrl()?>resetmail" method="post">
                        <div class="form-group mb-3">
                            <label for="reset_email" class="text-light">ایمیل</label>
                            <input type="email" class="form-control" id="reset_email" name="reset_email" required>
                        </div>
                        <div>
                            <button class="btn btn-outline-primary btn-block text-center align-content-center" type="submit"><h5 class="text-light">ارسال لینک</h5></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of card section -->