<?
class TestModel{
    public static function fetch_all(){
        $db = Db::getInstance();
         $records = $db->query("SELECT * FROM x_user",array());
         return $records;
    }


    public static function status($value){
        $db = Db::getInstance();
        $record = $db->first("SELECT * FROM x_user WHERE personal_id=:personalid",array(
            'personalid'=>$value,
        ));
        return $record;
    }
}