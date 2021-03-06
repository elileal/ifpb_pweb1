<?php
namespace Model;
use Excecao\InformacaoNulaException;
    abstract class Produto 
    {
        use \Traits\Nomeavel, \Traits\Logger;

        private $codigo;
        private $preco;

        function __construct($nome, $codigo, $preco)
        {
            if ($codigo == NULL)
            {
                throw new InformacaoNulaException('o parametro codigo está nulo');
            }
            if ($preco == NULL) 
            {   
                throw new InformacaoNulaException('o parametro preço está nulo');
            }
            $this->setCodigo($codigo);
            $this->setPreco($preco);
            $this->setNome($nome);

            
        }

        public function getPreco()
        {
                return $this->preco;
        }

        public function setPreco($preco)
        {
                $this->preco = $preco;
                return $this;
        }

        public function getCodigo()
        {
                return $this->codigo;
        }

        public function setCodigo($codigo)
        {
                $this->codigo = $codigo;
                return $this;
        }
    }
?>