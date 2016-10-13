<?php
/**
 * Created by PhpStorm.
 * User: angelo
 * Date: 09/10/2016
 * Time: 23:47
 */

?>

<form class="form-horizontal" action="viwer/d1r/cadastro_v.php" METHOD="get">
<fieldset>

<!-- Form Name -->
<legend>Cadastro</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtUser">Usuário:</label>
  <div class="col-md-4">
  <input id="txtUser" name="txtUser" type="text" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtPass">Senha:</label>
  <div class="col-md-4">
    <input id="txtPass" name="txtPass" type="password" placeholder="" class="form-control input-md" required="">

  </div>
</div>
<!-- email input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtEmail">E-mail:</label>
  <div class="col-md-4">
    <input id="txtPass" name="txtEmail" type="email" placeholder="" class="form-control input-md" required="">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnCadastro">Confirmar</label>
  <div class="col-md-4">
    <button id="btnCadastro" name="btnCadastro" class="btn btn-default">Cadastro</button>
  </div>
</div>

</fieldset>
</form>
