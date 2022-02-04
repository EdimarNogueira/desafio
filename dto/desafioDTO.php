<?php

class desafioDTO {

    private $id_desafiocol;
    private $tipo;
    private $data;
    private $valores;
    private $cpf;
    private $cartao;
    private $hora;
    private $dono_loja;
    private $nome_loja;

    function getId_desafiocol() {
        return $this->id_desafiocol;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getData() {
        return $this->data;
    }

    function getValores() {
        return $this->valores;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getCartao() {
        return $this->cartao;
    }

    function getHora() {
        return $this->hora;
    }

    function getDono_loja() {
        return $this->dono_loja;
    }

    function getNome_loja() {
        return $this->nome_loja;
    }

    function setId_desafiocol($id_desafiocol) {
        $this->id_desafiocol = $id_desafiocol;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setValores($valores) {
        $this->valores = $valores;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setCartao($cartao) {
        $this->cartao = $cartao;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setDono_loja($dono_loja) {
        $this->dono_loja = $dono_loja;
    }

    function setNome_loja($nome_loja) {
        $this->nome_loja = $nome_loja;
    }

}

?>
