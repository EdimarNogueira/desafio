<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Detalhes do Cliente</title>
        <link rel="stylesheet" href="../css/estilo.css">
    </head>
    <?php
    include_once './common.php';
    ?>
    <body>
        <div class="container">
            <div class="alert" style="width: 800px">
                <strong>Detalhes do Cliente</strong>   
            </div>  

            <table border="1" style="width: 800px">
                <tr>
                    <th width="50%">Nome da Loja: <?php echo $cliente["nome_loja"] ?></th>
                    <th width="50%">Dono da Loja: <?php echo $cliente["dono_loja"] ?></th>
                </tr>
            </table>
            <table border="1" style="width: 800px">
                <tr>
                    <th width="50%">Entrada(s)</th>
                    <th width="50%">Saída(s)</th>
                </tr>
                <tr>
                    <td width="50%">
                        <?php
                        foreach ($detalhes as $d) {
                            $tipo = $d["tipo"];
                            $valor = $d["valor"];
                            if ($tipo == 1) {
                                echo "<b>Débito</b> - R$ $valor<br>";
                            }
                            if ($tipo == 4) {
                                echo "<b>Crédito</b> - R$ $valor<br>";
                            }
                            if ($tipo == 5) {
                                echo "<b>Recebimento Empréstimo</b> - R$ $valor<br>";
                            }
                            if ($tipo == 6) {
                                echo "<b>Vendas</b> - R$ $valor<br>";
                            }
                            if ($tipo == 7) {
                                echo "<b></b> TED - R$ $valor<br>";
                            }
                            if ($tipo == 8) {
                                echo "<b>Recebimento</b> DOC - R$ $valor";
                            }
                        }
                        ?> 
                    </td>
                    <td width="50%">
                        <?php
                        foreach ($detalhes as $d) {
                            $tipo = $d["tipo"];
                            $valor = $d["valor"];
                            if ($tipo == 2) {
                                echo "<b>Boleto</b> - R$ $valor<br>";
                            }
                            if ($tipo == 3) {
                                echo "<b>Financiamento</b> - R$ $valor<br>";
                            }
                            if ($tipo == 9) {
                                echo "<b>Aluguel</b> - R$ $valor<br>";
                            }
                        }
                        ?>

                    </td>
                </tr>
            </table>
            <table border="1" style="width: 800px">
                <tr>
                    <td width="50%"><b>Entrada - R$ <?php echo $TOTALSOMA["soma"]; ?></b></td>
                    <td width="50%"><b>Saída - R$ <?php echo $TOTALSUBTRACAO["sub"]; ?></b></td>
                </tr>
                <tr>
                    <th colspan="2"><?php echo $resultado; ?></th>
                </tr>
            </table>
            <div class="clearfix" style="width: 400px">
                <button class="cancelbtn">
                    <a href="listaAll.php">Voltar</a>
                </button>
                </body>
            </div>
        </div>  
    </body>
</html>
