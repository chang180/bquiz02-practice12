<?php
include_once "../base.php";
$row=$News->find($_POST['id']);
echo "<pre>".$row['text']."</pre>";