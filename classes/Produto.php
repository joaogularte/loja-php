<?php

    class Produto{
        private $id;
        private $nome;
        private $preco;
        private $descricao;
        private $categoria;
        private $usado;
    
        public function setId($id){
            $this->id = $id;
        }
        
        public function getId(){
            return $this->$id;
        }

        public function setNome($nome){
            $this->$nome;
        }

        public function getNome($nome){
            return $this->nome;
        }
        
        public function getPreco(){
            return $this->preco;
        }

        public function setPreco($preco){
            if($preco > 0){
                $this->preco = $preco;
            }
        }

        public function setDescricao($descricao){
            $this->descricao =  $descricao;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }

        public function getCategoria(){
            return $this->categoria;
        }

        public function setUsado($usado){
            $this->usado = $usado;
        }

        public function getUsado(){
            return $this->usado;
        }

        public function precoComDesconto($valor = 0.1){
            if($valor > 0 && $valor <= 0.5){
                $this->preco -= $this->preco * $valor;
            }
            return $this->preco;
        }

        


    }

?>s