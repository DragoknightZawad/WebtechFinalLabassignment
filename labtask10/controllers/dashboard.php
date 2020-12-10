<?php
require_once '../models/db_connect.php';

function getAllUsers(){
    $query = "select * from students";
    return get($query);
}


 ?>
