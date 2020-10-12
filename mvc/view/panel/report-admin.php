<section class="container-fluid" id="report-admin">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div class="text-center mb-3">
                <span class="h4 text-muted">گزارش گیری</span>
                <?//=session_get('access');?>
                <br>
                <small>گزارش گیری از فعالیت ماهانه کاربران سامانه</small>
            </div>
            <hr>

            <div class="mb-5">
                <div class="inline-form">
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
                    <button type="submit" class="btn btn-info float-left" id="report-admin-button">تهیه گزارش</button>
                </div>
            </div>
            <hr>
        </div>
    </div>
</section>

<section id="adminResult">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <canvas id="chart"></canvas>
        </div>
</section>