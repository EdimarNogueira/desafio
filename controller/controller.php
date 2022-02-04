<?php

session_start(); //Inicializar a sessão com PHP
//Incluir a conexao com BD
require_once '../dao/desafioDAO.php';
require_once '../dto/desafioDTO.php';
//Receber os dados do formulário
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];
//ler todo o arquivo para um array
$dados = file($arquivo_tmp);
//Ler os dados do array
foreach ($dados as $linha) {
    //Retirar os espaços em branco no inicio e no final da string
    $linha = trim($linha);
    //Colocar em um array cada item separado pela virgula na string
    $valor = explode(',', $linha);

    //Recuperar o valor do array indicando qual posição do array requerido e atribuindo para um variável

    $tipo = $valor[0];
    $data = $valor[1];
    $valores = ($valor[2])/100.00;
    $cpf = $valor[3];
    $cartao = $valor[4];
    $hora = $valor[5];
    $dono_loja = $valor[6];
    $nome_loja = $valor[7];
    //Criar a QUERY com PHP para inserir os dados no banco de dados

    $desafioDTO = new desafioDTO();
    $desafioDTO->setTipo($tipo);
    $desafioDTO->setData($data);
    $desafioDTO->setValores($valores);
    $desafioDTO->setCpf($cpf);
    $desafioDTO->setCartao($cartao);
    $desafioDTO->setHora($hora);
    $desafioDTO->setDono_loja($dono_loja);
    $desafioDTO->setNome_loja($nome_loja);



    $desafioDAO = new desafioDAO();
    $sucesso = $desafioDAO->salvar($desafioDTO);

    if ($sucesso) {
        //Criar a variável global com a mensagem de sucesso
        $_SESSION['msg'] = "<p style='color: green;'>Carregado os dados com sucesso!</p>";
//Redirecionar o usuário com PHP para a página index.php
        header("Location: ../view/index.php");
    }
}

