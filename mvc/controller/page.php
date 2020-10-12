<?
class PageController{
    public function landing(){
        $data['content'] = array();
        //line below is theme and content
        View::render("/landing.php", $data);
    }
}