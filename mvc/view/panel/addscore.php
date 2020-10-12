<section class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div class="text-center mb-3">
                <span class="h4 text-muted">فرم ثبت امتیاز</span>
            </div>

            <form action="<?=baseUrl()?>addscore" method="post">
            <div id="addScoreForm">
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
                                <input class="form-control" type="number" name="score_1" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="text_1" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>
                        <!-- 2 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">مدرک پایه</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="score_2" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="text_2" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 3 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">تاییدیه تحصیلی / ریز نمرات</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="score_3" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="text_3" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 4 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">فرم ابلاغ مشروطی و تعهد مربوط</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="score_4" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="text_4" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 5 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">رعایت مصوبات شورای آموزشی</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="score_5" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="text_5" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 6 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">مرخصی / سقف سنوات / فرم 5 / ماده 55 / معادلسازی</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="score_6" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="text_6" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 7 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">وضعیت نظام وظیفه</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="score_7" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="text_7" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 8 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">کامل بودن خلاصه وضعیت</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="score_8" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="text_8" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 9 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">وضعیت بایگانی</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="score_9" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="text_9" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>

                        <!-- 10 / 10 row -->
                        <tr>
                            <td class="tableDataName text-wrap">نحوه پاسخگویی به مراجعین</td>
                            <td class="form-group tableDataScore">
                                <input class="form-control" type="number" name="score_10" id="score" min="0" max="10" placeholder="امتیاز" data-toggle="tooltip" data-placement="bottom" title="بین 0 تا 10">
                            </td>
                            <td class="form-group">
                                <textarea class="form-control" style="resize: none" rows="1" name="text_10" placeholder="یک جمله بنویسید" id=""></textarea>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-lg btn-success float-md-left"><i class="fas fa-save ml-1"></i>ذخیره کردن</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>