<?
    if(isAdmin()||isSuperAdmin()){
        session_set('score_id',$data['content'][1]['score_id']);
    }
?>
<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div class="text-center mb-3">
                <span class="h4 text-muted">جزییات فعالیت کاربر</span>
                <p><?//dump($data[1])?></p>
            </div>
            <div id="user_detail">
                <div class="progress" id="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success font-weight-bold" id="goodResult" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80% خوب</div>
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger font-weight-bold" id="badResult"" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20% ضعیف</div>
                </div>
                <hr class="mb-3">
                <div class="text-center mb-3">
                    <span class="h4 text-muted">آخرین پیام های ثبت شده توسط مدیر</span>
                </div>

                <div class="table-responsive" id="table">
                    <table class="table table-striped table-bordered text-center">
                        <thead class="thead-dark">
                        <tr>
                            <th class="tableDataNumber">امتیاز</i></th>
                            <th>پیام</th>
                            <th class="tableDataNumber">امتیاز</i></th>
                            <th>پیام</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td id="score_1" data-toggle="tooltip" data-placement="bottom" title="برای فرم های اولیه ثبت نام">1</td>
                            <td id="text_1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                            <td id="score_6" data-toggle="tooltip" data-placement="bottom" title="برای مرخصی / سقف سنوات / فرم 5 / ماده 55 / معادلسازی">6</td>
                            <td id="text_6">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                        </tr>
                        <tr>
                            <td id="score_2" data-toggle="tooltip" data-placement="bottom" title="برای مدرک پایه">2</td>
                            <td id="text_2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                            <td id="score_7" data-toggle="tooltip" data-placement="bottom" title="برای وضعیت نظام وظیفه">7</td>
                            <td id="text_7">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                        </tr>
                        <tr>
                            <td id="score_3" data-toggle="tooltip" data-placement="bottom" title="برای تاییدیه تحصیلی / ریز نمرات">3</td>
                            <td id="text_3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                            <td id="score_8" data-toggle="tooltip" data-placement="bottom" title="برای کامل بودن خلاصه وضعیت">8</td>
                            <td id="text_8">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                        </tr>
                        <tr>
                            <td id="score_4" data-toggle="tooltip" data-placement="bottom" title="برای فرم ابلاغ مشروطی و تعصد مربوط">4</td>
                            <td id="text_4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                            <td id="score_9" data-toggle="tooltip" data-placement="bottom" title="برای وضعیت بایگانی">9</td>
                            <td id="text_9">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                        </tr>
                        <tr>
                            <td id="score_5" data-toggle="tooltip" data-placement="bottom" title="برای رعایت مصوبات شورای آموزشی">5</td>
                            <td id="text_5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                            <td id="score_10" data-toggle="tooltip" data-placement="bottom" title="برای نحوه پاسخگویی به مراجعین">10</td>
                            <td id="text_10">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- TODO: 7- this chart only availible at report section and showing it here is not allowed -->
<!--            <div class="mb-3">-->
<!--                <div class="text-center mb-3">-->
<!--                    <span class="h4 text-muted">نمودار</span>-->
<!--                </div>-->
<!--                <div>-->
<!--                    <canvas id="chart"></canvas>-->
<!--                </div>-->
<!--            </div>-->
            <hr>

            <?if(isAdmin()){?>
            <div>
                <div class="text-center mb-3">
                    <span class="h4 text-danger">تغییر سطح دسترسی</span>
                    <br>
                    <small>در صورتی که تمایلی به تغییر دادن این مورد ندارید، لطفا این بخش را بدون تغییر باقی بگذارید.</small>
                </div>
                <div class="border border-danger p-3">
                    <div id="changeaccess" class="inline-form">
                        <div class="form-group">
                            <!-- One Row -->
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="currentaccess" class="float-right h6">سطح دسترسی فعلی</label>
                                    <input type="text" name="currentacess" id="currentacess" class="form-control" value="<?=get_user_access($data['content'][1]['access'])?>" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="accesslevel" class="float-right h6">ارتقاء / تنزیل</label>
                                    <select name="accesslevel" id="accesslevel" class="form-control">
                                        <option value="0">لطفا انتخاب کنید...</option>
                                        <option value="user">کاربر</option>
                                        <option value="admin">مدیر</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end of one row -->
                        </div>
                        <small id="change-access-msg"></small>
                        <div class="d-flex justify-content-end">
                            <button type="submit" id="change-access-btn" class="btn btn-danger">ذخیره کردن</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="change-user-pass">
                <div class="text-center my-3">
                    <span class="h4 text-danger">تغییر رمزعبور کاربر</span>
                    <br>
                    <small>در صورتی که تمایلی به تغییر دادن این مورد ندارید، لطفا این بخش را بدون تغییر باقی بگذارید.</small>
                </div>
                <div class="border border-danger p-3">
                    <div class="inline-form">
                        <div class="form-group">
                            <!-- One Row -->
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="change-pass" class="float-right h6">رمزعبور جدید</label>
                                    <input type="password" name="change-pass" id="change-pass" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="change-passconf" class="float-right h6">تکرار رمزعبور</label>
                                    <input type="password" name="change-passconf" id="change-passconf" class="form-control">
                                </div>
                            </div>
                            <!-- end of one row -->
                            <small id="change-pass-msg"></small>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button id="change-pass-btn" class="btn btn-danger">ذخیره کردن</button>
                        </div>
                    </div>
                </div>
            </div>

                <div id="change-user-pass">
                    <div class="text-center my-3">
                        <span class="h4 text-danger">حذف حساب کارمند</span>
                        <br>
                        <small style="font-weight: 800">اخطار: عملیات حذف حساب کاربری، عملیاتی غیرقابل برگشت است. لطفا دقت کافی را داشته باشید.</small>
                    </div>
                    <!--TODO: 8- change border width-->
                    <div class="border border-danger p-3">
                        <form action="<?=baseUrl()?>removeuser" method="post">
                            <div class="inline-form">
                                <div class="form-group">
                                    <!-- One Row -->
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="delete_name" class="float-right h6">نام و نام خانوادگی</label>
                                            <input type="text" id="delete_name" class="form-control" value="<?=$data['content'][1]['fullname']?>" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="delete_pid" class="float-right h6">کد پرسنلی</label>
                                            <input type="text" id="delete_pid" class="form-control" value="<?=$data['content'][1]['personal_id']?>" readonly>
                                            <input type="hidden" name="delete_user_id" value="<?=$data['content'][1]['user_id']?>">
                                        </div>
                                    </div>
                                    <!-- end of one row -->
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button id="delete-user-btn" class="btn btn-danger">حذف کاربر</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            <?}?>
        </div>
    </div>
</section>