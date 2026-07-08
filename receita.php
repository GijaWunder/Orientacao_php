<?php

class Receita{
    private $descricaoRe;
    private $valorRe;

    public function __toString(){
        $dados = "Receita: " . $this->descricaoRe . " | ";
        $dados .= "Valor da receita: " . $this->valorRe . "\n";

        return $dados;
    }

    /**
     * Get the value of descricaoRe
     */
    public function getDescricaoRe()
    {
        return $this->descricaoRe;
    }

    /**
     * Set the value of descricaoRe
     */
    public function setDescricaoRe($descricaoRe): self
    {
        $this->descricaoRe = $descricaoRe;

        return $this;
    }

    /**
     * Get the value of valorRe
     */
    public function getValorRe()
    {
        return $this->valorRe;
    }

    /**
     * Set the value of valorRe
     */
    public function setValorRe($valorRe): self
    {
        $this->valorRe = $valorRe;

        return $this;
    }
    
}

class Despesa{
    private $descricaoDe;
    private $valorDe;

    public function __toString(){
        $dados = "Despesa: " . $this->descricaoDe . " | ";
        $dados .= "Valor da despesa: " . $this->valorDe . "\n";

        return $dados;
    }

    /**
     * Get the value of descricaoDe
     */
    public function getDescricaoDe()
    {
        return $this->descricaoDe;
    }

    /**
     * Set the value of descricaoDe
     */
    public function setDescricaoDe($descricaoDe): self
    {
        $this->descricaoDe = $descricaoDe;

        return $this;
    }

    /**
     * Get the value of valorDe
     */
    public function getValorDe()
    {
        return $this->valorDe;
    }

    /**
     * Set the value of valorDe
     */
    public function setValorDe($valorDe): self
    {
        $this->valorDe = $valorDe;

        return $this;
    }
}

$opcao = 0;

$receitas = array();
$despesas = array();

do{
    print "\n\n*****Receitas e Despesas*****\n\n";
    print "1-Adicionar receita\n";
    print "2-Adicionar despesa\n";
    print "3-Listar receita\n";
    print "4-LIstar despesa\n";
    print "5-Sumarizar\n";
    print "0-Sair\n";

    $opcao = readline("Informe a opcao:");

    switch ($opcao) {
        case 1:
            print "\nAdicionar receita\n";
            
            $re = new Receita();
            $re->setDescricaoRe(readline("Informe a descrição da receita: "));
            $re->setValorRe(readline("Informe o valor da receita: "));

            array_push($receitas, $re);
            
            break;

        case 2:
            print "\nAdicionar despesas\n";
            
            $de = new Despesa();
            $de->setDescricaoDe(readline("Informe a descrição da despesa: "));
            $de->setValorDe(readline("Informe o valor da despesa: "));

            array_push($despesas, $de);
            
            break;

        case 3:
            print "\nListar receitas\n";

            foreach($receitas as $r){
                print $r;
            }

            break;

        case 4:
            print "\nListar despesas\n";

            foreach($despesas as $d){
                print $d;
            }

            break;


        case 5:
            $totalPagoRe = 0;
            $totalPagoDe = 0;

            foreach ($receitas as $r) {
                $totalPagoRe += $r->getValorRe();
            }

            foreach ($despesas as $d) {
                $totalPagoDe += $d->getValorDe();
            }

            $totalPago = $totalPagoRe - $totalPagoDe;

            printf("Valor total da receita: R$ %.2f\n", $totalPagoRe);
            printf("Valor total da despesa: R$ %.2f\n", $totalPagoDe);
            printf("Valor total: R$ %.2f\n", $totalPago);

        break;
        
        case 0:
            print "Tchau!\n";
        break;
        
        default:
            print "Opção inválida!\n";
            break;
    }




}while ($opcao != 0);
