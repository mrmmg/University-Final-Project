<html>
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
    <!-- Scripts -->
    <script src="<?=baseUrl()?>assets/js/fontawesome.js"></script>


    <title>MMG - Landing</title>
</head>

<body class="bg-gradiant">
<!-- particles js -->
<div id="particles-js"></div>
<!-- end of particles js -->

<?
    $failed = session_get('login_failed');
?>


<div id="content"><?=$content?></div>


<!-- Optional JavaScript -->
<script src="<?=baseUrl()?>assets/js/jquery-3.4.1.min.js"></script>
<!-- Optional JavaScript -->
<script src="<?=baseUrl()?>assets/js/particles.min.js"></script>
<script src="<?=baseUrl()?>assets/js/app.js"></script>
<script src="<?=baseUrl()?>assets/js/noty.min.js"></script>
<!-- other -->
<script src="<?=baseUrl()?>assets/js/popper.min.js"></script>
<script src="<?=baseUrl()?>assets/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        var fail = "<?=$failed;?>";
        if (fail == 1) {
            new Noty({text: 'کاربری با مشخصات وارد شده وجود ندارد', type: 'info', theme: 'bootstrap-v4', timeout: 5000, progressBar: true,}).show();
        } else if(fail == 2) {
            new Noty({text: 'رمزعبور وارد شده اشتباه است، لطفا دوباره تلاش کنید.', type: 'error', theme: 'bootstrap-v4', timeout: 5000, progressBar: true,}).show();
        }
    });
</script>
<?session_del('login_failed')?>
</body>
</html>