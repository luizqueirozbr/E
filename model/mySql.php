<?php
/**
 * Created by PhpStorm.
 * User: angelo
 * Date: 11/10/2016
 * Time: 12:52
 */

namespace connect;



class mySql
{
    public function conexao()//função responsavel por conectar com o banco de dados
    {


        $us = "root";
        $ps = "";
        $sv = "localhost";
        $db = "ecorp";
        $conexao = mysqli_connect($sv, $us, $ps, $db);

        if (mysqli_connect_errno()) {
            $erro = new \error\erro();
            echo $erro->ErroDB();


        }

    }

    /**
     *
     */
    public function cadastroUsuario()//função responsavel pelo cadastro de usuario
    {


    }
}