<!doctype html>
<html lang="fa">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="<?=baseUrl()?><?=baseUrl()?>assets/image/azad-logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=baseUrl()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=baseUrl()?>assets/css/bootstrap-rtl.css">
    <!-- Personal Style -->
    <link rel="stylesheet" href="<?=baseUrl()?>assets/css/vazir.css">
    <link rel="stylesheet" href="<?=baseUrl()?>assets/css/style.css">
    <link rel="stylesheet" href="<?=baseUrl()?>assets/css/noty.css">
    <link rel="stylesheet" href="<?=baseUrl()?>assets/css/persian-datepicker.min.css">
    <!-- Scripts -->
    <script src="<?=baseUrl()?>assets/js/fontawesome.js"></script>

    <title>پنل مدیریت</title>
</head>

<body id="toOfPage">

<nav class="navbar sticky-top bg-light navbar-expand-md navbar-light p-0">
    <div class="d-flex align-items-center">
        <!-- <img src="/<?=baseUrl()?>assets/image/azad-logo.png" class="rounded-circle mr-3" width="39" alt="Azad University Logo"> -->
        <div class="d-flex align-items-center">
            <a href="#" class="navbar-brand py-3 px-5 m-0 h3 bg-light">پنل مدیریت</a>
            <i class="fa fa-bars fa-lg mr-3 d-lg-none" data-toggle="collapse" data-target="#sidebar"></i>
            <div class="mr-5">
                <i class="fa fa-spinner fa-spin ml-1"></i>
                <!-- for more information about $data['content'][0] go to adminController file-->
<!--       TODO: THIS LINE DOESN'T WORK         -->
                <span class="h6 py-3"><?=$data['content'][0]?></span>
            </div>

        </div>
    </div>

    <div class="collapse navbar-collapse">
        <div class="ml-3 mr-auto d-flex align-items-center">
            <p class="m-0 ml-3 h6"><?=$_SESSION['fullname']?></p>
            <button type="button" class="btn btn-sm btn-danger d-block">
                <a href="<?=baseUrl()?>logout" class="text-decoration-none text-white">خروج</a>
            </button>
        </div>
    </div>
</nav>

<section class="container-fluid">
    <div class="row">
        <aside class="col-12 col-xl-2 col-lg-2 col-md-2 bg-dark text-white" id="sidebar">
            <ul class="nav flex-column p-0">
                <li class="nav-item d-flex align-items-center">
                    <i class="fas fa-home ml-1"></i>
                    <a href="<?=baseUrl()?>dashboard" class="nav-link my-1">خانه</a>
                </li>
                <?if(grantAdmin()){?>
                <li class="nav-item">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-users ml-1"></i>
                        <a href="#" class="nav-link my-1 w-100 collapsed" data-toggle="collapse" data-target="#usersSubMenu">کارمندان
                            <i class="fas fa-angle-left float-left"></i>
                        </a>
                    </div>

                    <div class="collapse" id="usersSubMenu">
                        <ul class="nav flex-column">
                            <li class="nav-item d-flex align-items-center">
                                <i class="fas fa-user-plus fa-sm ml-1"></i>
                                <a href="<?=baseUrl()?>adduser" class="nav-link my-1">افزودن کارمند</a>
                            </li>
                            <li class="nav-item d-flex align-items-center">
                                <i class="fas fa-users fa-sm ml-1"></i>
                                <a href="<?=baseUrl()?>users" class="nav-link my-1">لیست کارمندان</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <?}?>
                <?if(grantAdmin()){?>
                <li class="nav-item d-flex align-items-center">
                    <i class="fas fa-newspaper ml-1"></i>
                    <a href="<?=baseUrl()?>reportadmin" class="nav-link my-1">گزارش گیری</a>
                </li>
                <?} else {?>
                <li class="nav-item d-flex align-items-center">
                    <i class="fas fa-newspaper ml-1"></i>
                    <a href="<?=baseUrl()?>report" class="nav-link my-1">گزارش گیری</a>
                 </li>
                <?}?>
                <li class="nav-item d-flex align-items-center">
                    <i class="fas fa-cogs ml-1"></i>
                    <a href="<?=baseUrl()?>setting" class="nav-link my-1">تنظیمات</a>
                </li>
            </ul>
            <div class="border-bottom border-white my-3"></div>
            <div class="text-center">
                <!-- <span class="">سامانه امتیازدهی کاربران دانشگاه آزاد اسلامی واحد اصفهان</span> -->
                <p class="mb-md-2 mb-2">طراح و برنامه نویس : </p>
                <p class="mb-md-1 mb-1">محمد مهدی غلامرضایی</p>
                <small>دانشجوی رشته کامپیوتر<br> گرایش نرم افزار - ورودی سال 1395</small>
            </div>

        </aside>
    </div>
</section>

<?
    $userRegistered = session_get('userRegistered');
    $hasScore = session_get('hasScore');
    $changePass = session_get('changePass');
?>

<div id="content"><?=$content?></div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?=baseUrl()?>assets/js/jquery-3.4.1.min.js"></script>
<!-- Optional JavaScript -->
<script src="<?=baseUrl()?>assets/js/particles.min.js"></script>
<script src="<?=baseUrl()?>assets/js/app.js"></script>
<script src="<?=baseUrl()?>assets/js/Chart.min.js"></script>
<script src="<?=baseUrl()?>assets/js/noty.min.js"></script>
<script src="<?=baseUrl()?>assets/js/persian-date.min.js"></script>
<script src="<?=baseUrl()?>assets/js/persian-datepicker.min.js"></script>
<!-- other -->
<script src="<?=baseUrl()?>assets/js/popper.min.js"></script>
<script src="<?=baseUrl()?>assets/js/bootstrap.min.js"></script>
<script src="<?=baseUrl()?>assets/js/script.js"></script>

<script>
    $(document).ready(function() {
        // Noty Type: alert, success, warning, error, info
        var UR = "<?=$userRegistered?>";
        var HS = "<?=$hasScore?>";
        var CP = "<?=$changePass?>";
        if(UR == 1) {
            new Noty({text: 'کاربر از قبل ثبت نام شده است!', type: 'warning', theme: 'bootstrap-v4', timeout: 5000, progressBar: true,}).show();
        } else if(UR == 2){
            new Noty({text: 'پسوردهای انتخابی باهم مطابقت ندارند. مجددا تلاش کنید', type: 'info', theme: 'bootstrap-v4', timeout: 5000, progressBar: true,}).show();
        } else if(UR == 3){
            new Noty({text: 'کاربر با موفقیت ثبت نام و ایمیل فعال سازی ارسال شد.', type: 'success', theme: 'bootstrap-v4', timeout: 5000, progressBar: true,}).show();
        } else if(UR == 4){
            new Noty({text: 'امکان ثبت کاربر وجود ندارد! لطفا با پشتیبانی تماس بگیرید.', type: 'error', theme: 'bootstrap-v4', timeout: 5000, progressBar: true,}).show();
        }

        if(HS == 1){
            new Noty({text: 'امتیاز برای کاربر با موفقیت ثبت شد.', type: 'success', theme: 'bootstrap-v4', timeout: 5000, progressBar: true,}).show();
        }

        if(CP == 1){
            new Noty({text: 'رمزعبور شما با موفقیت تغییر یافت. همچنین رمزعبور جدید برای شما ایمیل شد.', type: 'success', theme: 'bootstrap-v4', timeout: 6000, progressBar: true,}).show();
        } else if(CP == 2){
            new Noty({text: 'رمزعبورهای وارد شده باهم مطابقت ندارند. لطفا دوباره تلاش کنید.', type: 'warning', theme: 'bootstrap-v4', timeout: 5000, progressBar: true,}).show();
        } else if(CP == 3){
            new Noty({text: 'رمزعبور فعلی را اشتباه وارد کرده اید. مجددا تلاش کنید.', type: 'error', theme: 'bootstrap-v4', timeout: 5000, progressBar: true,}).show();
        }
    });
</script>

<?
session_del('userRegistered');
session_del('hasScore');
session_del('changePass');
?>

</body>

</html>