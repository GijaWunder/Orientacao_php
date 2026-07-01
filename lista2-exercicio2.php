<?php

class Livro{
    private $titulo;
    private $autor;
    private $genero;
    private $quantidadePg;
    private $valotPago;


    public function __toString(){
        $dados = "Titulo do livro: " . $this->titulo . " | ";
        $dados .= "Autor do livro: " . $this->autor . " | ";
        $dados .= "Genero do livro: " . $this->genero . " | ";
        $dados .= "Quantidade de paginas do livro: " . $this->quantidadePg . " | ";
        $dados .= "Valor do livro: " . $this->valotPago . "\n";

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
     * Get the value of quantidadePg
     */
    public function getQuantidadePg()
    {
        return $this->quantidadePg;
    }

    /**
     * Set the value of quantidadePg
     */
    public function setQuantidadePg($quantidadePg): self
    {
        $this->quantidadePg = $quantidadePg;

        return $this;
    }

    /**
     * Get the value of valotPago
     */
    public function getValotPago()
    {
        return $this->valotPago;
    }

    /**
     * Set the value of valotPago
     */
    public function setValotPago($valotPago): self
    {
        $this->valotPago = $valotPago;

        return $this;
    }

}

$opcao = 0;

$livros = array();

do{
    print "\n\n*****Biblioteca*****\n\n";
    print "1-Inserir livro\n";
    print "2-Listar livros\n";
    print "3-Buscar livro\n";
    print "2-Total gasto\n";
    print "0-Sair\n";

    $opcao = readline("Informe a opcao:");

    switch ($opcao) {
        case 1:
            print "\nInserir livro\n";
            
            $li = new Livro();
            $li->setTitulo(readline("Informe o titulo do livro: "));
            $li->setGenero(readline("Informe o genero do livro: "));
            $li->setAutor(readline("Informe o autor do livro: "));
            $li->setQuantidadePg(readline("Informe a quantidade de paginas do livro:"));
            $li->setValotPago(readline("Informe o valor do livro:"));
            array_push($livros, $li);
            
            break;

        case 2:
            print "\nListar livros\n";

            foreach($livros as $l){
                print $l;
            }

            break;


        case 3:
            $liv = readline("Qual livro voce deseja buscar? (digite o indice do livro) ");
            foreach ($livros as $l) {
                print $l[$liv];
            }

            //continuar se tem ou nao

        break;

        case 4:
            $totalPago = 0;
            print "\nTotal Gasto na compra dos livros: " . $totalPago += $li->getValotPago() . "\n";

        break;
        
        case 0:
            print "Tchau!\n";
        break;
        
        default:
            print "Opção inválida!\n";
            break;
    }




}while ($opcao != 0);
