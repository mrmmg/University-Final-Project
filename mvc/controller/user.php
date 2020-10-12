<?
class UserController {
  public function __construct() {
    //echo "i am user controller";
  }

  public function login(){
      if(isset($_POST['email'])){
          $this->loginCheck();
      } else {
          $this->loginForm();
      }

  }

  //TODO: 1- Complete this function
  public function resetEmail(){
      if(isset($_POST['reset_email'])){
          $this->sendResetLink();
      } else {
          $this->getEmailForm();
      }
  }

  //TODO: 2- Use this function to check previous generated link and if ok then show the reset form to user
  public function resetLink($param1, $param2){
      //first check the x_reset tabel in db: if email is exists in tabel then show the reset form else show error message!
      $this->resetCheck();
  }


  //TODO: 3- Complete this function
  public function resetCheck(){
      if(isset($_POST['reset_pass'])){
          //check database and update user password and update x_reset token field with 0 -- it means that token is used and invalid.
      } else {
          $this->resetForm();
      }
  }

  private function loginCheck() {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $record = UserModel::fetch_by_email($email);
      if($record == null){
          session_set('login_failed',1);
          header("Location: /login");
      } else {
          $hashedPassword = encryptPassword($password);
          if($hashedPassword == $record['password']){
              $_SESSION['user_id'] = $record['user_id'];
              $_SESSION['email'] = $record['email'];
              $_SESSION['fullname'] = $record['fullname'];
              $_SESSION['personal_id'] = $record['personal_id'];
              $_SESSION['access'] = $record['access'];
              //dump($_SESSION);
              $this->panelShow();
          } else {
              session_set('login_failed',2);
              header("Location: /login");
          }
      }
  }
  public function panelShow(){
      $panel = AdminController::getInstance();
      $panel->panelShow();
  }
  private function loginForm(){
      $data['content'] = array();
      //line below is theme and content
      View::render("/user/login.php", $data);
  }

//  public function register(){
//      if(isset($_POST['email'])){
//          $this->registerCheck();
//      } else {
//          $this->registerForm();
//      }
//  }
//
//  private function registerCheck(){
//      $email = $_POST['email'];
//      $password = $_POST['password'];
//      $password2 = $_POST['password2'];
//      $fullname = $_POST['fullname'];
//      $personal_id = $_POST['personalid'];
//
//      $record = UserModel::fetch_by_email($email);
//      if ($record != null){
//          message('fail', "Already Registerd", true);
//      }
//
//      if (strlen($password)<3 || strlen($password2)<3){
//          message('fail', "Weak Password", true);
//      }
//
//      if ($password != $password2){
//          message('fail', "Password Doesn't Match", true);
//      }
//
//      $hashedPassword = encryptPassword($password);
//
//      UserModel::insert_user($email, $hashedPassword, $fullname, $personal_id);
//
//      message('success', "User Registered", false);
//    }
//
//  private function registerForm(){
//      $data['content'] = array();
//      //line below is theme and content
//      View::render("/user/register.php", $data);
//  }

  private function sendResetLink(){
      // send mail with phpMailer
      //after send mail, show a successful message page to user and say him/her that check his email
      //message('success','لینک بازیابی رمزعبور به ایمیل شما ارسال شده است. لطفا ایمیل خود را بررسی فرمایید.',true);
  }

  private function getEmailForm(){
      $data['content'] = array();
      View::render("/user/resetemail.php",$data);
  }

  private function resetForm(){
      $data['content'] = array();
      View::render("/user/resetpass.php",$data);
  }

  public function addNewUser(){
        $isDone = false;
        $firstname = post('new-firstname');
        $lastname = post('new-lastname');
        $email = post('new-email');
        $personal_id = post('new-pid');
        $pass = post('new-pass');
        $passconf = post('new-passconf');
        $access = post('new-access');
        $fullname = $firstname.' '.$lastname;
        $access = '|'.$access.'|';
        //TODO: 4- verify email (check domain gmail.com / yahoo.com/ hotmail.com) with regex!
        $record = UserModel::fetch_by_email($email);
        if($record != null){
            session_set('userRegistered',1);
            header('Location: /dashboard');
            exit;
        } else {
            if($pass != $passconf) {
              session_set('userRegistered',2);
              header('Location: /dashboard');
              exit;
            } else {
                $hashedPassword = encryptPassword($pass);
            }
            UserModel::insert_user($email, $hashedPassword, $fullname, $personal_id, $access);
            $isDone = true;
        }

        if($isDone){
            session_set('userRegistered',3);
            //TODO: 5- send mail to user send username, password and email
            //شما با مشخصات زیر در سامانه فلان ثبت نام شدید...
        } else{
            session_set('userRegistered',4);
        }
        header('Location: /dashboard');
  }

  public function changeUserPass(){
      $user_id = post('current_uid');
      $currentpass = post('current-pass');
      $pass = post('change-pass');
      $passconf = post('change-passconf');

      $record = UserModel::fetch_by_id($user_id);

      $currentpass = encryptPassword($currentpass);

      if($currentpass === $record['password']){
          if($pass === $passconf){
              $pass = encryptPassword($passconf);
              UserModel::update_pass($user_id,$pass);
              session_set('changePass',1);
              header('Location: /dashboard');
          } else {
              session_set('changePass',2);
              header('Location: /dashboard');
          }
      } else {
          session_set('changePass',3);
          header('Location: /dashboard');
      }
  }

    public function report(){
        if(isUser()){
            $data['content'] = array('گزارش گیری کاربر');
            View::panelRender("/panel/report.php",$data);
        } else if(isAdmin()){
            $panel = AdminController::getInstance();
            $panel->report();
        }
    }

    public function getReport(){
      $from = post('fromDate');
      $to = post('toDate');
      $user_id = session_get('user_id');
      $from = faTOen($from);
      $to = faTOen($to);
      //file_put_contents(getcwd()."/tmp/access.txt",$from."---".$to);
      $record = UserModel::get_report($user_id,$from,$to);
      echo json_encode($record);
    }

  public function logout(){
      session_destroy();
      header("Location:".baseUrl());
      session_start();
      session_regenerate_id();
  }

}