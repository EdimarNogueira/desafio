<?php
session_start(); //Inicializar a sessão com PHP
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="../css/estilo.css">
        <title>Arquivo CNAB</title>
    </head>
    <body>
        <!--Titulo do Formulário-->
        <div class="alert">
            <strong>Importar dados do arquivo CNAB!</strong>   
        </div>
        <?php
        //Imprimir a mensagem de sucesso no upload de dados do arquivo txt 
        //para o banco de dados com mysql
        if (isset($_SESSION['msg'])) {
            //Imprimir o valor da sessão
            echo $_SESSION['msg'];
            //Destruir a sessão com PHP
            unset($_SESSION['msg']);
        }
        ?>
        <!--Formulário com PHP para fazer upload de arquivo com PHP-->
        <form method="POST" action="../controller/controller.php" enctype="multipart/form-data"  style="border:1px solid #ccc">
            <div class="container">
                <label>Arquivo</label>
                <!--Campo para fazer o upload do arquivo com PHP-->
                <input type="file" name="arquivo"><br>
                <div class="clearfix" style="width: 300px">
                    <button class="signupbtn" type="submit">Importar</button>
                </div>
            </div>
        </form>
        <br>
        <br>
        <div class="container">
            <div class="clearfix" style="width: 300px">
                <button class="cancelbtn">
                    <a href="listaAll.php">Lista de Clientes</a>
                </button>
                </body>
            </div>
        </div>
</html>