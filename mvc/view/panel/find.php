<section class="container-fluid" id="searchBar">
    <div class="row">
        <section class="col-12 col-md-10 mr-md-auto my-3">
            <div class="input-group">
                <input type="text" class="form-control" id="searchInput" placeholder="کد پرسنلی کاربر را وارد کنید...">
                <div class="input-group-append">
                    <button class="btn btn-success" id="searchBtn">جستجو</button>
                </div>
            </div>

            <div class="jumbotron my-5" id="not_found">
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

<section class="container-fluid" id="user_found">
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
                                <button class="btn btn-sm btn-success" id="tableBtnInfo" data-toggle="tooltip" data-placement="bottom" title="افزودن امتیاز"><a href="<?=baseUrl()?>addscore" class="text-white"><i class="fa fa-plus"></i></a></button>
                                <button class="btn btn-sm btn-info" id="tableBtnInfo" data-toggle="tooltip" data-placement="bottom" title="مشاهده اطلاعات"><a href="<?=baseUrl()?>status" class="text-white"><i class="fa fa-eye"></i></a></button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
