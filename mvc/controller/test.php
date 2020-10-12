<?
class TestController{
    public function mail(){
        $mmg = 'mmg';
        $title = 'فعالسازی حساب شما در اسرع وقت!';
        $content = '
            <ul>
                <li>رمزعبور شما: 123456</li>
                <li>نام کاربری: user0@mrmmg.ir</li>
            </ul>
        ';
        $link = '#';
        $btntext = 'مراجعه به سامانه';
    $temp = create_mail("/storage/mail-template.php",$title,$content,$link,$btntext);
    require_once($temp);
 }
}