<?php 
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';


 ?>
<div class="row container">
    <div class="col s12">
        <h5 class="light">Editor de Registro</h5>
    </div>
</div>
<?php 
include_once 'db/conexao.php';

$id = filter_input (INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$_SESSION['id']=$id;
$querySelect = mysqli_query ($conn, "select * from ativos where id='$id'");

while ($registros = $querySelect->fetch_assoc()) :
    
    $ticker = $registros['ticker'];
    $dtinicio = $registros['dtinicio'];
    $alocacao = $registros['alocacao'];
    $dy = $registros['dy'];
    $precoentrada = $registros['precoentrada'];
    $precoatual = $registros['precoatual'];
    $precoteto = $registros['precoteto'];
	
	endwhile;
 ?>
 
  <div class="row container">
        <p> &nbsp;</p>
        <form action="db/update.php" method="post" class="col s12">
            <fieldset class="formulario" style="padding: 15px">
                <legend><img src="imagens/carteira.png" alt="[imagem]" width="100"></legend>
                <h5 class="light center"> Alterar de Ativos</h5>

                

                <div class="input-field col s12">
                    <i class="material-icons prefix">label</i>
                    <input type="text" name="ticker" id="ticker" value="<?php echo $ticker ?>" maxlength="5" require autofocus>
                    <label for="ticker">Codigo do Ativo</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">date_range</i>
                    <input type="text" name="dtinicio" id="dtinicio" value="<?php echo $dtinicio ?>" maxlength="45" require autofocus>
                    <label for="dtinicio">Data de Início</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">local_mall</i>
                    <input type="text" name="alocacao" id="alocacao" value="<?php echo $alocacao ?>" maxlength="45" require autofocus>
                    <label for="alocacao">Alocação</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">label</i>
                    <input type="text" name="dy" id="dy" value="<?php echo $dy ?>" maxlength="45" require autofocus>
                    <label for="dy">Dy esperado</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">attach_money</i>
                    <input type="text" name="precoentrada" id="precoentrada" value="<?php echo $precoentrada ?>" maxlength="45" require autofocus>
                    <label for="precoentrada">Preço de Entrada</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">attach_money</i>
                    <input type="text" name="precoatual" id="precoatual" value="<?php echo $precoatual ?>" maxlength="45" require autofocus>
                    <label for="precoatual">Preço Atual</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">attach_money</i>
                    <input type="text" name="precoteto" id="precoteto" value="<?php echo $precoteto ?>" maxlength="45" require autofocus>
                    <label for="precoteto">Preço Teto</label>
                </div>

                <div class="input-field col s12">
                    <input type="submit" value="alterar" class="btn blue">
					<a href="consultas.php" class="btn red">cancelar</a>
  
                </div>

            </fieldset>
        </form>
    </div>


<?php include_once 'includes/footer.inc.php' ?>