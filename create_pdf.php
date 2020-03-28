
<?php include('./partial/header.php'); ?>
<?php include("./connection.php");
require_once __DIR__.'/vendor/autoload.php';
// HAD CODE BACH TJIB M3TOMAT

$name = $_POST['name'];
$description = $_POST['description'];
$med = $_POST['med'];
$matin = $_POST['matin'];
$soir = $_POST['soir'];
$midi = $_POST['midi'];

//create new pdp instance
$mpdf=new\Mpdf\Mpdf();
$data='';
$data .="<h1>your details<h1>";

//add data

$data .='<strong>name :</strong>'.$name.'<br/>';
$data.='<strong>'
$data .="<strong>description :</strong>".$description.'<br/>';
$data.=<strong>

$data .='<strong>medicamment :</strong>'.$med.'<br/>';
$data.=<strong>

$data .='<strong> matin :</strong>'.$matin.'<br/>';
$data.=<strong>

$data .='<strong> soir :</strong>'.$soir.'<br/>';
$data.=<strong>

$data .='<strong>midi :</strong>'.$midi.'<br/>';
$data.=<strong>




?>