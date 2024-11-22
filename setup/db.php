<?php

$config_db['host']     ='localhost';
$config_db['user']     ='root';
$config_db['pass'] ='';
$config_db['db_name']  ='rvc_care';

$db = new mysqli($config_db['host'],$config_db['user'],$config_db['pass'],$config_db['db_name']);

if($db->connect_errno){
    exit("Can't connect database.");
}
    

