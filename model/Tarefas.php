<?php
    namespace Projeto\model;//Determinando o local do arquivo Pessoa
     
    class Tarefas{
         //public - Todo mundo visualiza
         //protected - Familia Visualiza (herança)
         //privati - Apenas a classe mãe visuliza

         private int $codigo;//Tipo da variavel
         private string $tarefas01;
         private float $horario;
         private string $dia;
         private string $descricao;
         private bool $status;//true or false


    public function __construct(int $codigo,
                                      string $tarefas01, 
                                      float $horario,  
                                      string $dia,
                                      string $descricao,
                                      bool $status)
     {
         $this->codigo     = $codigo;
         $this->tarefas01  = $tarefas01;
         $this->horario    = $horario;
         $this->dia        = $dia;
         $this->descricao  = $descricao;
         $this->status      = $status;
     }//fim do construtor com parâmetros
    
     //Método Get e Set
    public function __get(string $dado):mixed
    {
        return $this->dado;
    }//fim do get

         public function __set(string $variavel, string $novoDado):void
    {
        $this->veriavel = $novoDado;
    }//fim do set

    public function imprimir():string
    {
        return "<br>Código: ".$this->codigo.
               "<br>tarefas01: ".$this->tarefas01.
               "<br>horario: ".$this->horario.
               "<br>dia: ".$this->dia.
              "<br>descricao: ".$this->descricao.
              "<br>Status: ".$this->status;
    }//fim do método

     }//fim da classe pessoas
?>