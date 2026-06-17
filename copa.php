<?php

class Selecao{
    private $pais;
    private $tecnico;
    private $esquema;

    public function getDados(){
        $dados = "pais: " .  $this->pais;
        $dados .= " | tecnico: " . $this->tecnico;
        $dados .= " | esquema: " . $this->esquema . "\n";
        return $dados;
    }

    public function __toString(){ //exemplo
        $dados = "pais: " .  $this->pais;
        $dados .= " | tecnico: " . $this->tecnico;
        $dados .= " | esquema: " . $this->esquema . "\n";
        $dados .= " Aqui tem um metodo toString\n";
        return $dados;
    }

    /**
     * Get the value of pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     */
    public function setPais($pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of tecnico
     */
    public function getTecnico()
    {
        return $this->tecnico;
    }

    /**
     * Set the value of tecnico
     */
    public function setTecnico($tecnico): self
    {
        $this->tecnico = $tecnico;

        return $this;
    }

    /**
     * Get the value of esquema
     */
    public function getEsquema()
    {
        return $this->esquema;
    }

    /**
     * Set the value of esquema
     */
    public function setEsquema($esquema): self
    {
        $this->esquema = $esquema;

        return $this;
    }
}

$brasil = new Selecao();
$brasil->setPais("Brasil");
$brasil->setTecnico("Carlo Ancelloti");
$brasil->setEsquema("4-4-2");
print $brasil->getDados();

$arg = new Selecao();
$arg->setPais("Argentina");
$arg->setTecnico("Lionel Scaloni");
$arg->setEsquema("4-3-3");
print $arg->getDados();

$selecoes = array($brasil, $arg);
//print_r($selecoes);

print "Pais da primeira selecao: " . $selecoes[0]->getPais() . "\n";
print "Dados da segunda selecao: " . $selecoes[1]->getDados() . "\n";

$pt = new Selecao();
$pt->setPais("Portugal");
$pt->setTecnico("Roberto Martinez");
$pt->setEsquema("4-3-3");
print $pt->getDados();

array_push($selecoes, $pt);

print "\nDados de todas as selecoes: \n";

foreach($selecoes as $s){
    print $s->getDados();
}

foreach($selecoes as $s){
    print $s;
}