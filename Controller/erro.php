<?php

/**
 * Created by PhpStorm.
 * User: angelo
 * Date: 10/10/2016
 * Time: 01:59
 */
namespace error;

class erro
{
    public function AlertaDesenvolvimento(){

    $erro = '<div class="' . 'alert-danger"'. 'style=" padding: 5px 0px 10px 0px; margin: 7% 25%; border-top-right-radius:5px;  border-top-left-radius: 5px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px">
<center><h1>&xcirc; Sistema esta em Developement</h1>
<sub >Evil Corp.... Este é um portal em homenagem à série Mr.Robot criador por mim Luiz Queiroz Para estudo de linguagens web.</sub>
</center>
</div> ';
        echo $erro;

    }
}