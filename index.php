<?
define('test',true);
require_once(getcwd().'/system/loader.php');

$uri = getRequestUri();
global $config;
$route = $config['route'];
$uri = urldecode($uri);

foreach($route as $alias=>$target){
    if($uri == $alias){
        $uri = str_replace($alias, $target, $uri);
    }
}
/*
foreach ($route as $alias=>$target){
  $alias = '^' . $alias;
  $alias = str_replace('/', '\/', $alias);
  $alias = str_replace('*', '(.*)', $alias);

  if (preg_match('/'.$alias.'/', $uri)) {
    $uri = preg_replace('/'.$alias.'/', $target, $uri);
  }
}
*/

$parts = explode('/',$uri);
$controller = $parts[1];
if(strlen($controller)==0){
    $controller = 'page';
}
if(count($parts)>2){
    $method = $parts[2];
} else{
    $method = 'landing';
}

$params = array();

for($i=3; $i < count($parts); $i++){
  $params[] = $parts[$i];
}

$ControllerClassname = ucfirst($controller) . "Controller";
$ControllerInstance = new $ControllerClassname();
call_user_func_array(array($ControllerInstance, $method), $params);
