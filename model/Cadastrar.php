<?php
    namespace Projeto\model;//Determinando o local do arquivo Pessoa
     
    class Cadastrar{
         //public - Todo mundo visualiza
         //protected - Familia Visualiza (herança)
         //privati - Apenas a classe mãe visuliza

         private int $codigo;//Tipo da variavel
         private string $nome;
         private string $email;
         private string $senha;
    public function __construct(int $codigo,
                                      string $nome, 
                                      string $email,  
                                      string $senha,)
     {
         $this->codigo    = $codigo;
         $this->nome      = $nome;
         $this->email     = $email;
         $this->senha     = $senha;

        
     }//fim do construtor com parâmetros
    
     //Método Get e Set
    public function __get(string $dado):mixed
    {
        return $this->dado;
    }//fim do get

         public function __set(string $variavel, string $novoDado):void{
 
        $this->veriavel = $novoDado;
    }//fim do set

    public function imprimir():string
    {
        return "<br>Código: ".$this->codigo.
               "<br>nome: ".$this->nome.
               "<br>email: ".$this->email.
               "<br>senha: ".$this->senha;
    }//fim do método

     }//fim da classe pessoas
?>