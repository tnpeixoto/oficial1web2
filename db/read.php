<?php
include_once 'conexao.php';

$querySelect = mysqli_query($conn, "SELECT * FROM ativos");
while ($registros = $querySelect->fetch_assoc()) :
    $id = $registros['id'];
    $ticker = $registros['ticker'];
    $dtinicio = $registros['dtinicio'];
    $alocacao = $registros['alocacao'];
    $dy = $registros['dy'];
    $precoentrada = $registros['precoentrada'];
    $precoatual = $registros['precoatual'];
    $precoteto = $registros['precoteto'];

    echo "<tr>";
    echo "<td>$ticker</td><td>$dtinicio</td><td>$alocacao</td><td>$dy</td><td>$precoentrada</td><td>$precoatual</td><td>$precoteto</td><td>";
	echo "<a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";
	echo "<td><a href='db/delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";
    echo "</tr>";
endwhile;
