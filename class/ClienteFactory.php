<?php 
require_once("PessoaFisica.php");
require_once("PessoaJuridica.php");
class ClienteFactory {

    private $classes = array("Cliente", "PessoaFisica", "PessoaJuridica");

    public function criaPor($tipoCliente, $params) {

        $nome = $params['nome'];
        $endereco = $params['endereco'];
        $idade = $params['idade'];
        $cidade = new Cidade();
        $cep = $params['cep'];

        if (in_array($tipoCliente, $this->classes)) {
            return new $tipoCliente($nome, $endereco, $idade, $cidade, $cep);
        }

        return new Cliente($nome, $endereco, $idade, $cidade, $cep);
    }
}

?>