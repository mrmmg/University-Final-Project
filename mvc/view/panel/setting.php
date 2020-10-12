<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div class="text-center mb-3">
                <span class="h4 text-muted">تنظیمات</span>
            </div>
            <hr>

            <div class="mb-3">
                <span class="h5">تغییر رمزعبور</span>
            </div>

            <div class="border border-danger p-3 mb-3">
                <form action="<?=baseUrl()?>chnagepass" method="post" class="inline-form">
                    <div class="form-group">
                        <!-- One Row -->
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="current-pass" class="float-right h6">رمزعبور فعلی</label>
                                <input type="password" name="current-pass" id="current-pass" class="form-control">
                                <input type="hidden" name="current_uid" value="<?=session_get('user_id')?>">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="change-pass" class="float-right h6">رمزعبور جدید</label>
                                <input type="password" name="change-pass" id="change-pass" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="change-passconf" class="float-right h6">تکرار رمزعبور جدید</label>
                                <input type="password" name="change-passconf" id="change-passconf" class="form-control">
                            </div>
                        </div>
                        <!-- end of one row -->
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-danger">ذخیره کردن</button>
                    </div>
                </form>
            </div>

<!--            <div class="mb-3">-->
<!--                <span class="h5">ادامه تنظیمات...</span>-->
<!--            </div>-->
        </div>
    </div>
</section>