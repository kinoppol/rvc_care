<?php

require_once('setup/db.php');

$page=$_GET['p'];

$param_segment=explode('/',$page);

$controller=array_shift($param_segment);
$function=array_shift($param_segment);
