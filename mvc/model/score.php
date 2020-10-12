<?
class ScoreModel{
    public static function sum_score($user_id, $sum)
    {
       $db = Db::getInstance();
       $date = jdate('Y-m-d');
       $db->insert("INSERT INTO x_score (user_id, date, sum) VALUES (:userid, :date, :sum)",array(
           'userid' => $user_id,
           'date' => $date,
           'sum' => $sum
       ));

      return $db->first("SELECT LAST_INSERT_ID(), sum FROM x_score");

    }

    public static function total_score($user_id, $total = null, $condition = 0){
        //$condition is used to change the function state from SELECT (0) & INSERT (1)
        $db = Db::getInstance();
        if($condition == 0){
           return $db->first("SELECT total FROM x_sum WHERE user_id=:userid",array(
                'userid'=>$user_id
            ));
        }else if($condition == 1){
            $db->modify("UPDATE x_sum SET total=:xtotal WHERE user_id=:userid",array(
                'xtotal'=>$total,
                'userid'=>$user_id
            ));
        }
    }

//    public static function get_score_id($user_id)
//    {
//        $db = Db::getInstance();
//        $date = date('Y/m/d H:i:s');
//        //DATEADD(second, -30, CONVERT(datetime, :date, 120))
//        $records = $db->first("SELECT * FROM x_score WHERE date < NOW() - INTERVAL 10 SECOND AND user_id=:userid",array(
//            'date' => $date,
//            'userid' => $user_id
//        ));
//        return $records;
//    }

    public static function add_score($score_id, $details)
    {
        $db = Db::getInstance();
        $db->insert("INSERT INTO x_detail (score_id, details) VALUES (:scoreid, :details)",array(
            "scoreid" => $score_id,
            "details" => $details
        ));
    }

    public static function save_addon($score_id, $extra)
    {
        $db = Db::getInstance();
        $db->insert("INSERT INTO x_addon (score_id, extra) VALUES (:scoreid, :extra)",array(
            "scoreid" =>$score_id,
            "extra" =>$extra
        ));
    }
}