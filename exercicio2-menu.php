<?php

class Pessoa{
    private $nome;
    private $sobrenome;
    private $idade;

    public function __toString(){
        $dados = $this->nome . " " . $this->sobrenome;
        $dados .= ", " . $this->idade . " anos";
        return $dados;
    }

        /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

}

$opcao = 0;

$pessoas = array();

do{
    print "\n\n*****MENU*****\n\n";
    print "1-Cadastrar pessoa\n";
    print "2-Listar pessoas\n";
    print "0-Sair\n";

    $opcao = readline("Informe a opcao:");

    switch ($opcao) {
        case 1:
            print "\nCadastrado...\n";
            
            $pes = new Pessoa();
            $pes->setNome(readline("Informe seu nome: "));
            $pes->setSobrenome(readline("Informe seu sobrenome: "));
            $pes->setIdade(readline("Informe sua idade: "));
            array_push($pessoas, $pes);
            
            break;

        case 2:
            print "\nListando...\n";

            foreach($pessoas as $p){
                print $p . "\n";
            }

        break;
        
        case 0:
            print "Tchau!\n";

        break;
        
        default:
            print "Opção inválida!\n";
            break;
    }


}while ($opcao != 0);