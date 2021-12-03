

<?php session_start(); ?>
<?php include_once 'includes/header.inc.php' ?>

<?php include_once 'includes/menu.inc.php' ?>

    <div class="row container">
        <p> &nbsp;</p>
        <form action="db/create.php" method="post" class="col s12">
            <fieldset class="formulario" style="padding: 15px">
                <legend><img src="imagens/carteira.png" alt="[imagem]" width="100"></legend>
                <h5 class="light center"> Cadastro de Ativos</h5>

                <?php
                if(isset($_SESSION['msg'])):
                    echo $_SESSION['msg'];
                    session_unset();

                endif;
                ?>

                <div class="input-field col s12">
                    <i class="material-icons prefix">label</i>
                    <input type="text" name="ticker" id="ticker" maxlength="5" require autofocus>
                    <label for="ticker">Codigo do Ativo</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">date_range</i>
                    <input type="text" name="dtinicio" id="dtinicio" maxlength="45" require autofocus>
                    <label for="dtinicio">Data de Início</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">local_mall</i>
                    <input type="text" name="alocacao" id="alocacao" maxlength="45" require autofocus>
                    <label for="alocacao">Alocação</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">label</i>
                    <input type="text" name="dy" id="dy" maxlength="45" require autofocus>
                    <label for="dy">Dy esperado</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">attach_money</i>
                    <input type="text" name="precoentrada" id="precoentrada" maxlength="45" require autofocus>
                    <label for="precoentrada">Preço de Entrada</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">attach_money</i>
                    <input type="text" name="precoatual" id="precoatual" maxlength="45" require autofocus>
                    <label for="precoatual">Preço Atual</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">attach_money</i>
                    <input type="text" name="precoteto" id="precoteto" maxlength="45" require autofocus>
                    <label for="precoteto">Preço Teto</label>
                </div>

                <div class="input-field col s12">
                    <input type="submit" value="cadastrar" class="btn blue">
                    <input type="reset" value="limpar" class="btn red">
                </div>

            </fieldset>
        </form>
    </div>

   <?php include_once 'includes/footer.inc.php' ?>