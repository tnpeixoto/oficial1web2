<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$ticker = filter_input(INPUT_POST, 'ticker', FILTER_SANITIZE_SPECIAL_CHARS);
$dtinicio = filter_input(INPUT_POST, 'dtinicio', FILTER_SANITIZE_SPECIAL_CHARS);
$alocacao = filter_input(INPUT_POST, 'alocacao', FILTER_SANITIZE_NUMBER_FLOAT);
$dy = filter_input(INPUT_POST, 'dy', FILTER_SANITIZE_NUMBER_FLOAT);
$precoentrada = filter_input(INPUT_POST, 'precoentrada', FILTER_SANITIZE_NUMBER_FLOAT);
$precoatual = filter_input(INPUT_POST, 'precoatual', FILTER_SANITIZE_NUMBER_FLOAT);
$precoteto = filter_input(INPUT_POST, 'precoteto', FILTER_SANITIZE_NUMBER_FLOAT);


$sql = "UPDATE `ativos` SET ticker='$ticker', dtinicio='$dtinicio', alocacao='$alocacao', dy='$dy', precoentrada='$precoentrada', precoatual='$precoatual', precoteto='$precoteto' where id='$id'";
$querySelect = mysqli_query($conn, $sql);
$affected_rows = mysqli_affected_rows($conn);

if ($affected_rows > 0) :
        header("Location:../consultas.php");
		
endif;
?>

