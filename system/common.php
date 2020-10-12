<?php
function hr($return = false){
if ($return) { return "<hr>\n"; }
else { echo "<hr>\n"; }
}



function br($return = false){
if ($return){ return "<br>\n"; }
else { echo "<br>\n"; }
}



function dump($var, $mustExit = false, $return = false){
if (is_array($var)){
$out = print_r($var, true);
} else if (is_object($var)) {
$out = var_export($var, true);
} else {
$out = $var;
}

if ($return){
return "\n<pre style='direction: ltr'>$out</pre>\n";
} else {
echo "\n<pre style='direction: ltr'>$out</pre>\n";
}
if($mustExit){exit;}
}


function getCurrentDateTime(){
return date("Y-m-d H:i:s");
}

function getFullUrl(){
  $fullurl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  return $fullurl;
}

function baseUrl(){
    //return str_replace("\\", "/", getcwd());
    global $config;
    return $config['base'];
}

function getRequestUri(){
  return $_SERVER['REQUEST_URI'];
}

function encryptPassword($password){
    global $config;
    return md5($password . $config['salt']);
}


function strhas($string, $search, $caseSensitive = false){
  if ($caseSensitive){
    return strpos($string, $search) !== false;
  } else {
    return strpos(strtolower($string), strtolower($search)) !== false;
  }
}

function sleeep($second){
    $second = abs($second);
    if ($second < 1){
        usleep($second*1000000);
    }
    else{
        sleep($second);
    }
}

function message($type, $message, $mustExit){
  $data['message'] = $message;
  View::render("/message/$type.php", $data);
  if($mustExit){exit;}
}

function pagination($url, $showCount, $activeClass, $deactiveClass, $currentPageIndex, $pageCount, $jsFunction = null){
    ob_start();

    if ($jsFunction){
        $tags = "span";
        $action = 'onclick="' . $jsFunction . '(#)"';
    } else {
        $tags = "a";
        $action = 'href="' . $url . '/#"';
    }
    ?>

    <? $rAction = str_replace("#", "1", $action); ?>
    <<?=$tags?> <?=$rAction?> class="<?=$activeClass?>">1</<?=$tags?>>
<!--    <span>..</span>-->
    <? for ($i=$currentPageIndex-$showCount; $i<=$currentPageIndex+$showCount; $i++){ ?>
        <? if ($i <= 1) { continue; } ?>
        <? if ($i >= $pageCount) { continue; } ?>
        <? if ($i == $currentPageIndex) { ?>
            <span class="<?=$deactiveClass?>"><?=$i?></span>
        <? } else { ?>
            <? $rAction = str_replace("#", $i, $action); ?>
            <<?=$tags?> <?=$rAction?> class="<?=$activeClass?>"><?=$i?></<?=$tags?>>
        <? } ?>
    <? } ?>
<!--    <span>..</span>-->
    <? $rAction = str_replace("#", $pageCount, $action); ?>
    <<?=$tags?> <?=$rAction?> class="<?=$activeClass?>"><?=$pageCount?></<?=$tags?>>

    <?
    $output = ob_get_clean();
    return $output;
}

function session_get($field, $default = null){
    if (isset($_SESSION[$field])) {
        return $_SESSION[$field];
    }

    return $default;
}

function session_set($field, $value){
    $_SESSION[$field] = $value;
}

function session_del($field){
    unset($_SESSION[$field]);
}

function post($field, $default = null){
    if (isset($_POST[$field])) {
        return $_POST[$field];
    }

    return $default;
}

function post_set($filed,$value){
    $_POST[$filed] = $value;
}

function ispost($field){
    if (isset($_POST[$field])) {
        return true;
    }
    return false;
}

function faTOen($string) {
    return strtr($string, array('۰'=>'0', '۱'=>'1', '۲'=>'2', '۳'=>'3', '۴'=>'4', '۵'=>'5', '۶'=>'6', '۷'=>'7', '۸'=>'8', '۹'=>'9', '٠'=>'0', '١'=>'1', '٢'=>'2', '٣'=>'3', '٤'=>'4', '٥'=>'5', '٦'=>'6', '٧'=>'7', '٨'=>'8', '٩'=>'9'));
}

/**
 * $input is mail-template file path
 * $title, $content is the Mail title & Content
 * $link is button href link and $btntext is the button text :)
 * @param $input
 * @param $title
 * @param $content
 * @param $link
 * @param $btntext
 * @return string
 */
function create_mail($input, $title, $content, $link, $btntext){
    $file = fopen(getcwd().$input,'r');
    $output = '';
    while($line = fgets($file)){
        $output .= str_replace(['#title','#content','#link','#btn'],[$title,$content,$link,$btntext],$line);
    }
    fclose($file);
    file_put_contents(getcwd()."/tmp/mail-tamp.php",$output);
    $final = getcwd()."/tmp/mail-tamp.php";
    return $final;
}

function compose(){
    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'mail.mrmmg.ir';                        // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'user@example.com';                     // SMTP username
        $mail->Password   = 'secret';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
        $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        // Attachments
        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e){
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
