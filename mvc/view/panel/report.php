<section class="container-fluid" id="report-page">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div class="text-center mb-3">
                <span class="h4 text-muted">گزارش گیری</span>
                <?//=session_get('access');?>
                <br>
                <small>گزارش گیری از وضعیت فعالیت ها و امتیازات ماهانه</small>
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
                            <input type="hidden" id="report-access" value="<?=session_get('access');?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info float-left" id="report-button">تهیه گزارش</button>
                </div>
            </div>
            <hr>
        </div>
    </div>
</section>

<section id="result">
    <div class="row">
        <div class="col-12 col-md-10 mr-md-auto my-3">
            <div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered text-center">
                        <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>تاریخ</th>
                            <th>امتیاز</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>