<?php
require_once '../dao/desafioDAO.php';
$cpf = $_GET["id"];
$desafioDAO = new desafioDAO();
$cliente = $desafioDAO->getId($cpf);
$detalhes = $desafioDAO->getAllID($cpf);
$TOTALSOMA = $desafioDAO->TOTALSOMA($cpf);
$TOTALSOMA["soma"];
$TOTALSUBTRACAO = $desafioDAO->TOTALSUBTRACAO($cpf);
$TOTALSUBTRACAO["sub"];
$resultado = $TOTALSOMA["soma"] - $TOTALSUBTRACAO["sub"];
if ($resultado < 0) {
    $resultado = "<b style='background-color: red;color: white;'>Saldo Negativo R$ $resultado</b>";
} else {
    $resultado = "<b style='background-color: green;color: white;'>Saldo Positivo R$ $resultado";
}
?>