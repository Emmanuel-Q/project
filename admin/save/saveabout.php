<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['id'];
$a = $_POST['abt-title'];
$b = $_POST['abt-h1'];
$c = $_POST['abt-p1'];
$d = $_POST['abt-founder'];
$e = $_POST['abt-p2'];
$f = $_POST['abt-lm'];
$g = $_POST['abt-cu'];

// query
$sql = "UPDATE abouttb 
        SET abt-title=?, abt-h1=?, abt-p1=?, abt-founder=?,abt-p2=?,abt-lm=?, abt-cu=?
		WHERE id=1";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g));
var_dump();
header("location: about.php");

?>