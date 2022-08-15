<?php
date_default_timezone_set("Asia/Jakarta");
include 'class/handshake.php';
include 'class/class.global.php';

// get single
$db = new db();
$db->q("SELECT * FROM tablename");
$single = $db->s();

echo $single['colname'];

$db->rc();
$db = null;

// get multi
$db = new db();
$db->q("SELECT * FROM tablename");
$rows = $db->m();
$db->rc();
$db = null;

foreach ($rows as $row) {
  echo $row['colname'];
}
$db->rc();
$db = null;
?>