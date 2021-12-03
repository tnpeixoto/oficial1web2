<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>
<div class="row container">
    <div class="col s12">
        <h5 class="light">Consultas</h5>

        <table class="striped">
            <thead>
            <tr>
                <th>Ativo</th>
                <th>Data de Entrada</th>
                <th>Alocação</th>
                <th>Dy Esperado</th>
                <th>Preço de Entrada</th>
                <th>Preço Atual</th>
                <th>Preço Teto</th>
            </tr>  
            </thead>
            <tbody>
                <?php include_once 'db/read.php'?>
            </tbody>

        </table>
    </div>
</div>

<?php include_once 'includes/footer.inc.php' ?>