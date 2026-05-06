<?php

class Aluno{
    private $nome;
    private $nota1;
    private $nota2;

    public function mediaAluno(){

        $media = "A media do(a) " . $this->nome . " é " . ($this->nota1 + $this->nota2) / 2 . "\n";
        return $media;
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
     * Get the value of nota1
     */
    public function getNota1()
    {
        return $this->nota1;
    }

    /**
     * Set the value of nota1
     */
    public function setNota1($nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    /**
     * Get the value of nota2
     */
    public function getNota2()
    {
        return $this->nota2;
    }

    /**
     * Set the value of nota2
     */
    public function setNota2($nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }
}

$aluno1 = new Aluno();
$aluno1->setNome(readline("Informe seu nome: "));
$aluno1->setNota1(readline("Informe sua primeira nota: "));
$aluno1->setNota2(readline("Informe sua segunda nota: "));

$aluno2 = new Aluno();
$aluno2->setNome(readline("Informe seu nome: "));
$aluno2->setNota1(readline("Informe sua primeira nota: "));
$aluno2->setNota2(readline("Informe sua segunda nota: "));

$aluno3 = new Aluno();
$aluno3->setNome(readline("Informe seu nome: "));
$aluno3->setNota1(readline("Informe sua primeira nota: "));
$aluno3->setNota2(readline("Informe sua segunda nota: "));

print($aluno1->mediaAluno());
print($aluno2->mediaAluno());
print($aluno3->mediaAluno());