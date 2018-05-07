<?php

include('Db.php');

$base = new Db();

// $config = $base->query("SELECT * FROM configuration");
$title = $base->single("SELECT nomsite FROM configuration");
$descript = $base->single("SELECT description FROM configuration");