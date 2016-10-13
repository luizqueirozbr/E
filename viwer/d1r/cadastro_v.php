<?php
/**
 * Created by PhpStorm.
 * User: angelo
 * Date: 13/10/2016
 * Time: 11:36
 */

    $nome=$_GET['txtUser'];
    $senha =$_GET['txtPass'];
    $email =$_GET['txtEmail'];


    if ((!$nome) || (!$senha) || (!$email)){

        echo ""; // estes if's verificam se a campos vazios

    }if(!$nome){ // se o nome for vazio.

        echo "Favor Preencher o NOME </br>";

}if (!$senha){

    echo "Favor preencher a SENHA </br>";


}if (!$email){

    echo "Favor preencher o E-mail </br>";

}else{

    echo $nome . $senha . $email;

}


