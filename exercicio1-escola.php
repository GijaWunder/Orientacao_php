<?php

class Escola{
    private $nome;
    private $end;
    private $qtdAlunos;

    public function __toString(){
        $dados = "Escola: " .  $this->nome;
        $dados .= " | Endereço: " . $this->end;
        $dados .= " | Quantidade de alunos: " . $this->qtdAlunos . "\n";
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
     * Get the value of end
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set the value of end
     */
    public function setEnd($end): self
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get the value of qtd_alunos
     */
    public function getQtdAlunos()
    {
        return $this->qtdAlunos;
    }

    /**
     * Set the value of qtd_alunos
     */
    public function setQtdAlunos($qtdAlunos): self
    {
        $this->qtdAlunos = $qtdAlunos;

        return $this;
    }
}



$escolas = array();

for ($i=1; $i <= 4; $i++) { 
    $esco = new Escola();
    $esco->setNome(readline("Qual é o nome da escola?"));
    $esco->setEnd(readline("Qual é o endereco da escola?"));
    $esco->setQtdAlunos(readline("Qual é a quantidade de alunos da escola?"));
    array_push($escolas, $esco);
}

$escolaMaisAlunos = $escolas[0];

foreach ($escolas as $e) {
    print $e;

    if ($e->getQtdAlunos() > $escolaMaisAlunos->getQtdAlunos()) {
        $escolaMaisAlunos = $e;
    }
}

print "Escola com mais alunos:\n";
print($escolaMaisAlunos);