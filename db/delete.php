<?php
include_once 'conexao.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "delete from ativos where id='$id'";
$querySelect = mysqli_query($conn, $sql);
$affected_rows = mysqli_affected_rows($conn);

if ($affected_rows > 0) :
        header("Location:../consultas.php");

endif;
