<?php
class View{
    public static function render($filepath, $data=array()){
        extract($data);
        ob_start();
        // /mvc/view
        require_once(getcwd()."/mvc/view".$filepath);
        $content = ob_get_clean();
        // line below load the template
        require_once(getcwd()."/theme/default.php");

    }

    public static function panelRender($filepath, $data=array()){
        extract($data,EXTR_PREFIX_ALL,"wddx");
        //dump($data,true);
        ob_start();
        require_once(getcwd()."/mvc/view".$filepath);
        $content = ob_get_clean();
        require_once(getcwd()."/theme/panel.php");
    }

}