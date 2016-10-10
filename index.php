<?php
/**
 * Created by PhpStorm.
 * User: angelo
 * Date: 09/10/2016
 * Time: 08:23
 */
include("Config.php");
include("Controller/erro.php");

$conf= new \cfg\Config();
$erro= new \error\erro();


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $conf->NomeSite;?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
       body {
           background-image: url(midia/backgraund.png);
       }
    </style>


</head>

<body>
   <?php include('viwer/top.php');  #chama o top ?>
   <?php include('viwer/body.php'); #chama o corpo ?>
   <?php include('viwer/botton.php'); #chama o roda-pé ?>
</body>
</html>
