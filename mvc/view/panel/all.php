<section class="container-fluid">
    <div class="row">
        <section class="col-12 col-md-10 mr-md-auto my-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="کد پرسنلی کاربر را وارد کنید...">
                <div class="input-group-append">
                    <button class="btn btn-success">جستجو</button>
                </div>
            </div>

            <div class="jumbotron my-5">
                <div class="container">
                    <h1 class="display-4">هیچ موردی یافت نشد!</h1>
                    <p class="lead">جستجوی شما نتیجه ای در پی نداشت، لطفا دوباره تلاش کنید.</p>
                    <small class="text-danger">دلیل خطا: شما جستجویی انجام نداده اید یا اینکه جستجوی شما فاقد نتیجه بوده است</small>
                </div>
                <!-- <hr>
                <div class="mt-3 float-left btn btn-sm btn-info" id="notFound" data-toggle="popover" title="راهنمای بخش" data-content="در صورتی که شما این قسمت را مشاهده کرده اید، دو معنی دارد: 1- شما جستجویی اننجام نداده اید یا 2- جستجوی شما فاقد نتیجه بوده است.">راهنما</div> -->
            </div>
        </section>
    </div>
</section>

<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div class="text-center mb-3">
                <span class="h4 text-muted">اطلاعات کارمند</span>
            </div>
            <div class="table-responsive-sm">
                <table class="table table-striped table-bordered text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>نام و نام خانوادگی</th>
                        <th>کد پرسنلی</th>
                        <th>مجموع امتیازات</th>
                        <th>بیشتر</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="lead">
                        <td>1</td>
                        <td>محمد مهدی غلامرضایی</td>
                        <td>98100</td>
                        <td>17500</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-success" id="tableBtnInfo" data-toggle="tooltip" data-placement="bottom" title="افزودن امتیاز"><a class="text-white" href="#"> <i class="fa fa-plus"></i></a></button>
                                <button class="btn btn-sm btn-info" id="tableBtnInfo" data-toggle="tooltip" data-placement="bottom" title="مشاهده اطلاعات"><a class="text-white" href="#"><i class="fa fa-eye"></i></a></button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div class="text-center mb-3">
                <span class="h4 text-muted">فرم ثبت امتیاز</span>
            </div>
            <form action="#" class="">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark text-center">
                        <tr>
                            <th>خدمات</th>
                            <th>امتیاز</th>
                            <th>توضیحات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- 1 / 10 row -->
                        <tr>
                            <td class="mh-100 tableDataName text-wrap">فرم های اولیه ثبت نام</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>
                        <!-- 2 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">مدرک پایه</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 3 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">تاییدیه تحصیلی / ریز نمرات</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 4 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">فرم ابلاغ مشروطی و تعهد مربوط</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 5 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">رعایت مصوبات شورای آموزشی</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 6 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">مرخصی / سقف سنوات / فرم 5 / ماده 55 / معادلسازی</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 7 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">وضعیت نظام وظیفه</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 8 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">کامل بودن خلاصه وضعیت</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 9 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">وضعیت بایگانی</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 10 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">نحوه پاسخگویی به مراجعین</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-lg btn-success float-md-left"><i class="fas fa-save ml-1"></i>ذخیره کردن</button>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-1">
            <div class="text-center mb-3">
                <span class="h4 text-muted">اطلاعات کارمندان</span>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>نام و نام خانوادگی</th>
                        <th>کد پرسنلی</th>
                        <th>مجموع امتیازات</th>
                        <th>بیشتر</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="lead">
                        <td>1</td>
                        <td>محمد مهدی غلامرضایی</td>
                        <td>98100</td>
                        <td>17500</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info"><a class="text-white text-decoration-none" href="#">مشاهده</a></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="lead">
                        <td>1</td>
                        <td>محمد مهدی غلامرضایی</td>
                        <td>98100</td>
                        <td>17500</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info"><a class="text-white text-decoration-none" href="#">مشاهده</a></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="lead">
                        <td>1</td>
                        <td>محمد مهدی غلامرضایی</td>
                        <td>98100</td>
                        <td>17500</td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-info"><a class="text-white text-decoration-none" href="#">مشاهده</a></button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="row text-center">
        <div class="col-12 col-md-10 mr-md-auto my-1">
            <nav class="text-center mr-md-auto">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a href="#" class="page-link py-2 px-3">
                            <span>&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link py-2 px-3">
                            1
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link py-2 px-3">
                            2
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link py-2 px-3">
                            3
                        </a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link py-2 px-3">
                            <span>&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div class="text-center mb-2">
                <span class="h4 text-muted">افزودن کارمند جدید</span>
            </div>
            <span class="h6 text-primary">اطلاعات پایه</span>
            <hr>
            <form action="">
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
                            <input class="form-control spinner-off" id="new-email" type="number" name="new-email">
                        </div>
                    </div>
                </div>

                <span class="h6 text-danger">اطلاعات امنیتی</span>
                <hr>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label class="h6 pt-3" for="new-pass">رمزعبور</label>
                        <input class="form-control" id="new-pass" type="password" name="new-firstname">
                    </div>
                    <div class="col-md-6">
                        <label class="h6 pt-3" for="new-passconf">تایید رمزعبور</label>
                        <input class="form-control" id="new-passconf" type="password" name="new-lastname">
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

<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div class="text-center mb-3">
                <span class="h4 text-muted">جزییات فعالیت کاربر</span>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-success font-weight-bold" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80% خوب</div>
                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger font-weight-bold" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20% ضعیف</div>
            </div>
            <hr class="mb-3">
            <div class="text-center mb-3">
                <span class="h4 text-muted">آخرین پیام های ثبت شده توسط مدیر</span>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th class="tableDataNumber"><i class="fas fa-hashtag"></i></th>
                        <th>پیام</th>
                        <th class="tableDataNumber"><i class="fas fa-hashtag"></i></th>
                        <th>پیام</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td data-toggle="tooltip" data-placement="bottom" title="برای فرم های اولیه ثبت نام">1</td>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                        <td data-toggle="tooltip" data-placement="bottom" title="برای مرخصی / سقف سنوات / فرم 5 / ماده 55 / معادلسازی">6</td>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                    </tr>
                    <tr>
                        <td data-toggle="tooltip" data-placement="bottom" title="برای مدرک پایه">2</td>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                        <td data-toggle="tooltip" data-placement="bottom" title="برای وضعیت نظام وظیفه">7</td>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                    </tr>
                    <tr>
                        <td data-toggle="tooltip" data-placement="bottom" title="برای تاییدیه تحصیلی / ریز نمرات">3</td>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                        <td data-toggle="tooltip" data-placement="bottom" title="برای کامل بودن خلاصه وضعیت">8</td>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                    </tr>
                    <tr>
                        <td data-toggle="tooltip" data-placement="bottom" title="برای فرم ابلاغ مشروطی و تعصد مربوط">4</td>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                        <td data-toggle="tooltip" data-placement="bottom" title="برای وضعیت بایگانی">9</td>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                    </tr>
                    <tr>
                        <td data-toggle="tooltip" data-placement="bottom" title="برای رعایت مصوبات شورای آموزشی">5</td>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                        <td data-toggle="tooltip" data-placement="bottom" title="برای نحوه پاسخگویی به مراجعین">10</td>
                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-3">
                <div class="text-center mb-3">
                    <span class="h4 text-muted">آخرین پیام ثبت شده توسط سیستم امتیاز دهی</span>
                </div>

                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">تبریک!</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط مختلف متفاوت است.</p>
                    <hr>
                    <p class="h6">+ 100 امتیاز</p>
                </div>
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">هشدار!</h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط مختلف متفاوت است.</p>
                    <hr>
                    <p class="h6">- 50 امتیاز</p>
                </div>
            </div>

            <div class="mb-3">
                <div class="text-center mb-3">
                    <span class="h4 text-muted">نمودار</span>
                </div>
                <div>
                    <canvas id="chart"></canvas>
                </div>
            </div>
            <hr>

            <div>
                <div class="text-center mb-3">
                    <span class="h4 text-danger">تغییر سطح دسترسی</span>
                    <br>
                    <small>در صورتی که تمایلی به تغییر دادن این مورد ندارید، لطفا این بخش را بدون تغییر باقی بگذارید.</small>
                </div>
                <div class="border border-danger p-3">
                    <form action="" class="inline-form">
                        <div class="form-group">
                            <!-- One Row -->
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="currentaccess" class="float-right h6">سطح دسترسی فعلی</label>
                                    <input type="text" name="" id="currentacess" class="form-control" value="کاربر" readonly>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="accesslevel" class="float-right h6">ارتقاء / تنزیل</label>
                                    <select name="" id="accesslevel" class="form-control">
                                        <option>لطفا انتخاب کنید...</option>
                                        <option value="user">کاربر</option>
                                        <option value="admin">مدیر</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end of one row -->
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-danger">ذخیره کردن</button>
                        </div>
                    </form>
                </div>
            </div>

            <div>
                <div class="text-center my-3">
                    <span class="h4 text-danger">تغییر رمزعبور کاربر</span>
                    <br>
                    <small>در صورتی که تمایلی به تغییر دادن این مورد ندارید، لطفا این بخش را بدون تغییر باقی بگذارید.</small>
                </div>
                <div class="border border-danger p-3">
                    <form action="" class="inline-form">
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
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-danger">ذخیره کردن</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div class="text-center mb-3">
                <span class="h4 text-muted">گزارش گیری</span>
                <br>
                <small>گزارش گیری از وضعیت فعالیت ها و امتیازات ماهانه</small>
            </div>
            <hr>

            <div class="mb-5">
                <form action="" class="inline-form">
                    <div class="row" id="datepicker">
                        <div class="form-group col-md-6">
                            <label for="from-date" class="float-right h6">از تاریخ</label>
                            <input type="text" name="from-date" id="from-date" class="form-control mydatepicker">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="to-date" class="float-right h6">تا تاریخ</label>
                            <input type="text" name="to-date" id="to-date" class="form-control mydatepicker">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info float-left">تهیه گزارش</button>
                </form>
            </div>
            <hr>

            <div class="d-flex justify-content-center" id="loading">
                <div class="spinner-border" role="status"></div>
            </div>

            <div class="" id="result"></div>

        </div>
    </div>
</section>

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
                <form action="" class="inline-form">
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
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-danger">ذخیره کردن</button>
                    </div>
                </form>
            </div>

            <div class="mb-3">
                <span class="h5">ادامه تنظیمات...</span>
            </div>
        </div>
    </div>
</section>
