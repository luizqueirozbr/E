

<div class="container"> <!-- inicio conteiner base !-->

    <div class="col-md-8"> <!---inicio controle center-!-->
        <div class="col-md-3">
            <!--  Inicio Div title  !-->
           <!-- <img src="midia/ecorp.png" width="10%" height="10%" class="img-circle" style="position: static;"> !-->
            <h1 class="text-md-center"> <?php echo $conf->NomeSite; ?> </h1>
            <!--  Fim Div title  !-->
        </div>

<?php
    $ativo = $auth->ativo();
        if ($ativo == true){

        printf('
        <div class='. '"col-md-6/"><!---inicio Login!-->

            <form action="index.php" method="get">
                <table>
                    <tr>
                        <td>Nome: </td>
                        <td> <input type="text" name="txtName" ></td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td> <input type="text" name="txtPass"> </td>
                    </tr>
                    <tr style="padding: 10px 20px 10px 4px; position: fixed">

                        <td class="popover-left">   <!--btn logar do form!-->
                            <button type="submit" class="btn-primary" name="btnOk"><span class="glyphicon glyphicon-off"></span> </button>
                            <td>
                      </form>

    <a  href="#Cadastro" class="alert-link" data-toggle="modal"> <span class="glyphicon glyphicon-user"></span> Não é Cadastrado ainda ? </a>

                            </td>
                        </td>

                    </tr>
                </table>
            <!--fim login!-->
        </div>
        ');}else{

            echo $erro->AvisoLoginOff();
        }
?>

    </div><!-- fim controle center!-->
    <div class="col-md-3">

        <?php echo $conf->GetHora()?>


    </div> <!--Infos!-->

</div> <!-- fim conteiner base !-->





<!-- Modal HTML -->
<div id="Cadastro" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Você é Novo ? </h4>
            </div>
            <div class="modal-body">
                <?php include ('viwer/cadastro.php')?>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>