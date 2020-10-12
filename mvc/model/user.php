<?
class UserModel{
    public static function fetch_by_email($email){
        $db = Db::getInstance();
        $record = $db -> first("SELECT * FROM x_user WHERE email=:email",array(
            'email' => $email
        ));
        return $record;
    }

    public static function fetch_by_id($user_id){
        $db = Db::getInstance();
        $record = $db -> first("SELECT * FROM x_user WHERE user_id=:uid",array(
            'uid' => $user_id
        ));
        return $record;
    }

    public static function insert_user($email, $hashpassword, $fullname, $personal_id, $access){
        $db = Db::getInstance();
        $db ->insert("INSERT INTO x_user (email, password, fullname, personal_id, access) VALUES (:email, :hashpassword, :fullname, :personal_id, :access)",array(
            'email' => $email,
            'hashpassword' => $hashpassword,
            'fullname' => $fullname,
            'personal_id' => $personal_id,
            'access'=> $access
        ));
    }

    public static function search_user($value){
        $db = Db::getInstance();
        $record = $db -> first("SELECT * FROM x_user WHERE personal_id=:personalid",array(
            'personalid' => $value,
        ));
        return $record;
    }

    public static function status($value){
        $db = Db::getInstance();
        $record = $db->first("SELECT * FROM x_user LEFT OUTER JOIN x_score ON x_user.user_id = x_score.user_id LEFT OUTER JOIN x_addon ON x_score.score_id = x_addon.score_id WHERE personal_id =:personalid",array(
            'personalid'=>$value,
        ));

        return $record;
    }

    public static function get_detail($value){
        $db = Db::getInstance();
        $record = $db->first("SELECT * FROM x_score LEFT OUTER JOIN x_detail ON x_score.score_id = x_detail.score_id LEFT OUTER JOIN x_addon ON x_score.score_id = x_addon.score_id WHERE x_score.score_id =:scoreid",array(
            'scoreid'=>$value
        ));
        return $record;
    }

    public static function update_access($pid,$access){
        $db = Db::getInstance();
        $db->modify("UPDATE x_user SET access=:newaccess WHERE personal_id=:personalid",array(
                'newaccess'=>$access,
                'personalid'=>$pid
            ));

    }

    public static function get_access($pid){
        $db = Db::getInstance();
        return $db->first("SELECT access FROM x_user WHERE personal_id=:personalid",array(
            'personalid'=>$pid
        ));
    }

    public static function fetch_all_user(){
        $db = Db::getInstance();
        $records = $db->query("SELECT * FROM x_user LEFT OUTER JOIN x_sum ON x_user.user_id = x_sum.user_id",array());
        return $records;
    }

    //change user pass by admin
    public static function change_pass($pid,$password){
        $db = Db::getInstance();
        return $db->modify("UPDATE x_user SET password=:newpass WHERE personal_id=:personalid",array(
            'newpass'=>$password,
            'personalid'=>$pid
        ));
    }

    //change user in setting panel
    public static function update_pass($user_id,$password){
        $db = Db::getInstance();
        return $db->modify("UPDATE x_user SET password=:newpass WHERE user_id=:userid",array(
            'newpass'=>$password,
            'userid'=>$user_id
        ));
    }

    public static function get_report($user_id, $from, $to){
        $db = Db::getInstance();
            $record = $db->query("SELECT * FROM `x_score` WHERE user_id=:userid AND date BETWEEN :fromdate AND :todate",array(
                'userid'=>$user_id,
                'fromdate'=>$from,
                'todate'=>$to
            ));
            return $record;
    }

    public static function report_admin($from, $to){
        $db = Db::getInstance();
        $record = $db->query("SELECT SUM(sum) AS total FROM x_score WHERE date BETWEEN :fromdate AND :todate",array(
            'fromdate'=>$from,
            'todate'=>$to
        ));
        return $record;
    }

}