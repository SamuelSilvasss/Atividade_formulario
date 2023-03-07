<?php
//Importação
require_once("pessoa.class.php");

class Teste{
    //objeto pessoa com a visibilidade privada
    private $pessoa;

    public function __construct(){
        //Objeto chamado pessoa que recebe a classe Pessoa()
        $pessoa = new Pessoa();
        //Passar um valor para o método setNome
        $pessoa->setNome($_POST['nome'] . "<br>");
        //Imprimir o valor do método getNome
        echo $pessoa->getNome();

        //Passar um valor para o método setEndereco
        $pessoa->setEndereco($_POST['endereco'] . "<br>");
        //Imprimir o valor do método getEndereco
        echo $pessoa->getEndereco();

        //Passar um valor para o método setBairro
        $pessoa->setBairro($_POST['bairro'] . "<br>");
        //Imprimir o valor do método getBairro
        echo $pessoa->getBairro();

        //Passar um valor para o método setCep
        $pessoa->setCep($_POST['cep'] . "<br>");
        //Imprimir o valor do método getCep
        echo $pessoa->getCep();

         //Passar um valor para o método setCidade
         $pessoa->setCidade($_POST['cidade'] . "<br>");
         //Imprimir o valor do método getCidade
         echo $pessoa->getCidade();

          //Passar um valor para o método setEstado
        $pessoa->setEstado($_POST['estado'] . "<br>");
        //Imprimir o valor do método getEstado
        echo $pessoa->getEstado();
        
    }
    //Instância
}new Teste();

?>