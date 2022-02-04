<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../css/estilo.css">
        <title></title>        
    </head>
    <body>
        <div class="container">
            <div class="alert">
                <strong>Lista de Clientes</strong>   
            </div>  

            <?php
            require_once '../dao/desafioDAO.php';
            $desafioDAO = new desafioDAO();
            $clientes = $desafioDAO->getAll();
            echo "<table border='1' align='center'>";
            echo "<tr>";
            echo "  <th>Nome Loja</th>";
            echo "  <th>Cpf</th>";
            echo "  <th>Detalhes</th>";
            echo "</tr>";
            foreach ($clientes as $c) {
                echo "<tr>";
                echo "  <td>{$c["nome_loja"]}</td>";
                echo "  <td>{$c["cpf"]}</td>";
                echo "  <td><a href='detalhesCliente.php?id={$c["cpf"]}' style='color:blue;font-weight: bold'>Detalhes do Cliente</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            ?>
            <div class="clearfix">
                <button class="cancelbtn" style="width: 200px">
                    <a href="index.php">Voltar</a>
                </button>
                </body>
            </div>
        </div>
    </body>
</html>
