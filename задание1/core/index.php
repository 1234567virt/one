<?php
if(!isset($_COOKIE["count"])){
    $_COOKIE["count"]=1;
}
else{
   $cookie = $_COOKIE['count']++;
    setcookie("count", $cookie);
}
echo $img;
?>