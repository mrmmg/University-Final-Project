<?
function has_access($access, $targetAccess){
    return strhas($access, "|$targetAccess|") ? true : false;
}

function get_access_name(){
    if(isGuest()){return "guest";}

    $access = $_SESSION['access'];
    $accessName = "";

    if(isSuperAdmin()){
    $accessName .= "مدیرکل";
    } else if(isAdmin()){
    $accessName .= "مدیر";
    }

    if(isUser()){
        $accessName .= "کاربر";
    }

    return $accessName;

}

function get_user_access($access){
    $accessLevel = "";
    if(has_access($access,"user")){
        $accessLevel.= "کاربر";
    } else if(has_access($access,"admin")){
        $accessLevel.= "مدیر";
    } else if(has_access($access,"superadmin")){
        $accessLevel.= "مدیرکل";
    }
    return $accessLevel;
}


function isSuperAdmin(){
    if(isGuest()){return "guest";}
    $access = $_SESSION['access'];
    if(has_access($access, "superadmin")){
        return true;
    }
    return false;
}

function isAdmin(){
    if(isGuest()){return "guest";}
    $access = $_SESSION['access'];
    if(has_access($access, "admin") || has_access($access, "superadmin")){
        return true;
    }
    return false;
}

function isUser(){
    if(isGuest()){return "guest";}
    $access = $_SESSION['access'];
    if(has_access($access, "user")){
        return true;
    }
    return false;
}

function isGuest(){
    return !isset($_SESSION['access']) ? true : false;
}

function grantSuperAdmin(){
    if(isSuperAdmin()){
        return true;
    }
}

function grantAdmin(){
    if(isAdmin()){
        return true;
    }
}