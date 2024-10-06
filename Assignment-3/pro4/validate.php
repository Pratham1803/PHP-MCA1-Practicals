<?php
function validator($username, $password): bool{
    if($username == 'administrator' && $password == 'admin') return true;
         else return false;
}
?>