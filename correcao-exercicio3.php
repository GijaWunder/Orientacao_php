<?php

class Livro{

    private $titulo;
    private $autor;
    private $genero;
    private $numPaginas;

    public function __toString(){
        $dados = "Titulo: " . $this->getTitulo() . "\n";
        $dados .= "Autor: " . $this->getAutor() . "\n";
        $dados .= "Genero: " . $this->getGenero() . "\n";
        $dados .= "Numero de paginas: " . $this->getNumPaginas() . "\n";
        return $dados;
    }


    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     */
    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of genero
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of numPaginas
     */
    public function getNumPaginas()
    {
        return $this->numPaginas;
    }

    /**
     * Set the value of numPaginas
     */
    public function setNumPaginas($numPaginas): self
    {
        $this->numPaginas = $numPaginas;

        return $this;
    }
}


$livro1 = new Livro();
$livro1->setTitulo(readline("informe o titulo do livro: "));
$livro1->setAutor(readline("informe o autor: "));
$livro1->setGenero(readline("informe o genero: "));
$livro1->setNumPaginas(readline("informe o numero de paginas: "));

$livro2 = new Livro();
$livro2->setTitulo(readline("informe o titulo do livro: "));
$livro2->setAutor(readline("informe o autor: "));
$livro2->setGenero(readline("informe o genero: "));
$livro2->setNumPaginas(readline("informe o numero de paginas: "));

$livro3 = new Livro();
$livro3->setTitulo(readline("informe o titulo do livro: "));
$livro3->setAutor(readline("informe o autor: "));
$livro3->setGenero(readline("informe o genero: "));
$livro3->setNumPaginas(readline("informe o numero de paginas: "));

$livroMaisPag = $livro1;

if ($livro2->getNumPaginas() > $livroMaisPag->getNumPaginas()) {
    $livroMaisPag = $livro2;
}

if ($livro3->getNumPaginas() > $livroMaisPag->getNumPaginas()) {
    $livroMaisPag = $livro3;
}

print("---O livro com mais paginas---\n");
print($livroMaisPag);