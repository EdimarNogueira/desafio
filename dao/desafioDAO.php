<?php

require_once 'conexao/conexao.php';

class desafioDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function getAll() {
        try {
            $sql = "SELECT distinct(cpf),nome_loja FROM tb_desafio order by nome_loja";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function TOTALSOMA($cpf) {
        try {
            $sql = "SELECT sum(valor) as soma FROM bd_desafio.tb_desafio where tipo in(1,4,5,6,7,8) and cpf=$cpf";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetch(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function TOTALSUBTRACAO($cpf) {
        try {
            $sql = "SELECT sum(valor) as sub FROM bd_desafio.tb_desafio where tipo in(2,3,9) and cpf=$cpf";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $clientes = $stmt->fetch(PDO::FETCH_ASSOC);
            return $clientes;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvar(desafioDTO $desafioDTO) {
        try {
            $sql = "INSERT INTO tb_desafio (tipo,
                                          data,
                                          valor,
                                          cpf,
                                          cartao,
                                          hora,
                                          dono_loja, 
                                          nome_loja) 
                
                    VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $desafioDTO->getTipo());
            $stmt->bindValue(2, $desafioDTO->getData());
            $stmt->bindValue(3, $desafioDTO->getValores());
            $stmt->bindValue(4, $desafioDTO->getCpf());
            $stmt->bindValue(5, $desafioDTO->getCartao());
            $stmt->bindValue(6, $desafioDTO->getHora());
            $stmt->bindValue(7, $desafioDTO->getDono_loja());
            $stmt->bindValue(8, $desafioDTO->getNome_loja());

            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getId($cpf) {
        try {
            $sql = "SELECT * FROM tb_desafio WHERE cpf = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cpf);
            $stmt->execute();
            $cliente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getAllID($cpf) {
        try {
            $sql = "SELECT * FROM tb_desafio WHERE cpf = $cpf";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $cpf);
            $stmt->execute();
            $cliente = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $cliente;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
