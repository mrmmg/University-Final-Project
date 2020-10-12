<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div class="text-center mb-2">
                <span class="h4 text-muted">افزودن کارمند جدید</span>
            </div>
            <span class="h6 text-primary">اطلاعات پایه</span>
            <hr>
            <form action="<?=baseUrl()?>addnewuser" method="post">
                <div class="row form-group my-3">
                    <div class="col-md-6">
                        <label class="h6 pt-3" for="firstname">نام</label>
                        <input class="form-control" id="firstname" type="text" name="new-firstname">
                    </div>
                    <div class="col-md-6">
                        <label class="h6 pt-3" for="firstname">نام خانوادگی</label>
                        <input class="form-control" id="firstname" type="text" name="new-lastname">
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-6">
                        <label class="h6 pt-3" for="new-email">ایمیل</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input class="form-control" id="new-email" type="email" name="new-email">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <label class="h6 pt-3" for="new-email">کد پرسنلی</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
                            </div>
                            <input class="form-control spinner-off" id="new-email" type="number" name="new-pid">
                        </div>
                    </div>
                </div>

                <span class="h6 text-danger">اطلاعات امنیتی</span>
                <hr>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label class="h6 pt-3" for="new-pass">رمزعبور</label>
                        <input class="form-control" id="new-pass" type="password" name="new-pass">
                    </div>
                    <div class="col-md-6">
                        <label class="h6 pt-3" for="new-passconf">تایید رمزعبور</label>
                        <input class="form-control" id="new-passconf" type="password" name="new-passconf">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label class="h6 pt-3" for="new-access">سطح دسترسی</label>
                        <select class="form-control" id="new-access" name="new-access">
                            <option>انتخاب کنید...</option>
                            <option value="user">کاربر</option>
                            <option value="admin">مدیر</option>
                        </select>
                    </div>
                </div>
                <hr class="my-3">
                <button type="submit" class="btn btn-lg btn-success float-md-left"><i class="fas fa-save ml-1"></i>ذخیره کردن</button>
            </form>
        </div>
    </div>
</section>