<?php
session_start();
include_once 'conexao.php';
$ticker = filter_input(INPUT_POST, 'ticker', FILTER_SANITIZE_SPECIAL_CHARS);
$dtinicio = filter_input(INPUT_POST, 'dtinicio', FILTER_SANITIZE_SPECIAL_CHARS);
$alocacao = filter_input(INPUT_POST, 'alocacao', FILTER_SANITIZE_NUMBER_FLOAT);
$dy = filter_input(INPUT_POST, 'dy', FILTER_SANITIZE_NUMBER_FLOAT);
$precoentrada = filter_input(INPUT_POST, 'precoentrada', FILTER_SANITIZE_NUMBER_FLOAT);
$precoatual = filter_input(INPUT_POST, 'precoatual', FILTER_SANITIZE_NUMBER_FLOAT);
$precoteto = filter_input(INPUT_POST, 'precoteto', FILTER_SANITIZE_NUMBER_FLOAT);

$sql="select ticker from ativos";
echo $sql;
$querySelect = mysqli_query($conn, $sql);
$array_ticker = [];

while ($tickers = $querySelect->fetch_assoc()) :
    $tickers_check = $tickers['ticker'];
    array_push($array_ticker, $tickers_check);
endwhile;

if (in_array($ticker, $array_ticker)) :
    $_SESSION['msg'] = "<p class= 'center red-text'>" . 'Já exite o ativo' . $ticker . 'criado' . "</p>";
    header("Location:../");
else :
    $result_insert = "INSERT INTO `ativos` ( `ticker`, `dtinicio`, `alocacao`, `dy`, `precoentrada`, `precoatual`, `precoteto`) VALUES ('$ticker', '$dtinicio', '$alocacao', '$dy', '$precoentrada', '$precoatual', '$precoteto')";
	$result_insert = mysqli_query($conn, $result_insert);
    $affected_rows = mysqli_affected_rows($conn);

    if ($affected_rows > 0) :
        $_SESSION['msg'] = "<p class='center green-text'>" . 'Casdastro efetuado com sucesso' . "<br>";
        header("Location:../index.php");
$conn->close();
    endif;
endif;
