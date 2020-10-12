<?
class AdminController{


    private static $admin;
    public static function getInstance(){
        if (self::$admin == null){
            self::$admin = new AdminController();
            //self::$admin = new AdminController();
        }
        return self::$admin;
    }
    public function __construct(){
        //if(grantAdmin()){echo "admin";}else{echo "no admin";}
    }


    public function panelShow(){
        $data['content'] = array('صفحه اصلی سامانه');
        if(isSuperAdmin() || isAdmin()){
            View::panelRender("/panel/find.php",$data);
        } elseif(isUser()){
            View::panelRender("/panel/status.php",$data);
        }
        //View::panelRender("/panel/setting.php",$data);
    }

    public function addUser(){
        $data['content'] = array('افزودن کاربر جدید');
        View::panelRender("/panel/adduser.php",$data);
    }

    public function users(){
        //$data['record'] = $this->showAllUsers();
        $data['content'] = array('مشاهده لیست کارمندان');
        View::panelRender("/panel/users.php",$data);
    }

    //باید در این نقطه سطح دسترسی گرفته شده و بر اساس آن فرم مربوطه لود شود. نکته حائز اهمیت این است که بایستی بر اساس سطح دسترسی یک متد جدا برای گزارش گیری داشته باشم
    public function report(){ // /reportadmin
        $data['content'] = array(' گزارش گیری مدیر');
        View::panelRender("/panel/report-admin.php",$data);
    }

    public function setting(){
        $data['content'] = array('مشاهده تنظیمات');
        View::panelRender("/panel/setting.php",$data);
    }

    public function addScore(){
        $personal_id = session_get('x_personal_id');
        $user_id = session_get('x_user_id');
        $score = array();
        $detail = array();

        for($i=1;$i<=10;$i++){
            $detail['score_'.$i] = $_POST['score_'.$i];
            $detail['text_'.$i] = $_POST['text_'.$i];
            array_push($score,$_POST['score_'.$i]);
            //array_push($text,$_POST['text_'.$i]);
        }

       $data =  json_encode($detail,JSON_UNESCAPED_UNICODE);

        $total = ScoreModel::total_score($user_id);
        $total = $total['total'];

        $sumscore = array_sum($score);
        $total += $sumscore;

        ScoreModel::total_score($user_id,$total,1);

        $result = ScoreModel::sum_score($user_id,$sumscore);
        $score_id = $result['LAST_INSERT_ID()'];
        $sum = $result['sum'];

        ScoreModel::add_score($score_id, $data);

        $this->saveAddon($sum,$score_id);

        session_set('hasScore',1);
        header('Location: /dashboard');
    }

    private function saveAddon($sumScore,$score_id)
    {
        $extra = 0;
        if($sumScore == 100) {
            //+10 -0
            $extra = 10;
        } elseif((70 <= $sumScore) && ($sumScore < 90)) {
            //+7 -3
            $extra = 4;
        } elseif((50 <= $sumScore) && ($sumScore < 70)) {
            //+5 -4
            $extra = 1;
        } elseif((30 <= $sumScore) && ($sumScore < 50)){
            //+2 -10
            $extra = -8;
        } elseif((10 <= $sumScore) && ($sumScore < 30)){
            //+0 -10
            $extra = -10;
        }
        ScoreModel::save_addon($score_id,$extra*5);
    }

    public function showAddScore($value){
        $value = explode('&',$value);
        session_set('x_personal_id',$value[0]);
        session_set('x_user_id',$value[1]);
        $data['content'] = array('در حال افزودن امتیاز');
        View::panelRender("/panel/addscore.php",$data);
    }

    public function status($value){
        $record = UserModel::status($value);
        $data['content'] = array('مشاهده اطلاعات کاربر',$record);
        View::panelRender("/panel/status.php",$data);
    }

    public function getDetail(){
       $score_id = session_get('score_id');
       $record = UserModel::get_detail($score_id);
       echo json_encode($record);
    }

    public function searchUser(){
        $value = $_POST['keyword'];
        $record = UserModel::search_user($value);
        echo json_encode($record);
    }

    public function accessLevel(){
        $newAccess = $_POST['newAccess'];
        $personal_id = (int)$_POST['personalId'];
        $newAccess = '|'.$newAccess.'|';
        //file_put_contents(getcwd()."/tmp/access.txt",$condition);
        UserModel::update_access($personal_id,$newAccess);
    }

    public function getAccess(){
        $personal_id = (int)$_POST['personalId'];
        $result = UserModel::get_access($personal_id);
        echo json_encode($result);
    }

    public function changeUserPass(){
        $personal_id = (int)$_POST['personalId'];
        $pass = $_POST['passConf'];
        $pass = encryptPassword($pass);
        $result = UserModel::change_pass($personal_id,$pass);
        echo json_encode($result);

    }

    public function adminReport(){
        $from = faTOen(post('fromDate'));
        $to = faTOen(post('toDate'));
        //file_put_contents(getcwd()."/tmp/access.txt",$from."-admin-".$to);
        $record = UserModel::report_admin($from,$to);
        //dump($record);
        echo json_encode($record);
    }

//    public function catalog($pageIndex){
//        $count = 3;
//        $start = ($pageIndex -1) * $count;
//
//        $records = UserModel::fetch_all_user($start,$count);
//
//        dump($records);
//    }

    public function showAllUsers(){
        $records = UserModel::fetch_all_user();
        echo json_encode($records);
    }

    //TODO: 6- complete this function, search in database and delete every record of user in any tables
    public function deleteUser(){
        $user_id = post('delete_user_id');
        echo $user_id;
    }



    public function all(){
        $data['content'] = array('مشاهده کل پنل');
        View::panelRender("/panel/all.php",$data);
    }




}
