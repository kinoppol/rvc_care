<?php

require_once('setup/db.php');
require_once('helper/main.php');
$page=$_GET['p'];

$param_segment=explode('/',$page);

$controller=array_shift($param_segment);
$function=array_shift($param_segment);

include('controller/'.$controller.'.php');