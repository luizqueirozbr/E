<?php
/**
 * Created by PhpStorm.
 * User: angelo
 * Date: 09/10/2016
 * Time: 08:25
 */

namespace cfg;


class Config
{
 public $NomeSite="Evilx";

    /**
     * @param $dataHora
     */
    public function GetHora()
    {
        date_default_timezone_set('America/Sao_Paulo');

        $realtime = date("d/m/Y");
        $realHora = date("h:i:s");
        $Periodo = date("a");
        if ($Periodo == "am") {
            echo "Olá Bom Dia ! " . $realtime . " </br> " . $realHora;
        } else if ($Periodo == "pm") {
            echo "Olá Boa Tarde ! " . $realtime . " </br> " . $realHora;

        }
    }

        public function SetCorp()
        {
            $Direitos = "Evil Corp " . date("Y");

            echo "Todos os direitos reservados á " . "<b>" . $Direitos . "</b>";
        }
}