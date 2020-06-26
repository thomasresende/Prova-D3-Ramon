<?php
class SuperHeroi {
    private $id;
    private $nome;
    private $poderEspecial;
    private $energia;
    private $forca;
    private $origem;

    public function getId() {
      return $this->id;
    }
    public function getNome() {
      return $this->nome;
    }
    public function getPoderEspecial() {
      return $this->poderEspecial;
    }
    public function getEnergia() {
      return $this->energia;
    }
    public function getForca() {
      return $this->forca;
    }
    public function getOrigem() {
      return $this->Origem;
    }
    public function setId($id) {
      $this->id = $id;
    }
    public function setNome($nome) {
      $this->nome = $nome;
    }
    public function setPoderEspecial($poderEspecial) {
      $this->poderEspecial = $poderEspecial;
    }
    public function setEnergia($energia) {
      $this->energia = $energia;
    }
    public function setForca($forca) {
      $this->forca = $forca;
    }
    public function setorigem($origem) {
      $this->origem = $origem;
    }
    public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem){
      $this->id = $id;  
      $this->nome = $nome;
      $this->poderEspecial = $poderEspecial;
      $this->energia = $energia;
      $this->forca = $forca;
      $this->origem = $origem;
    
     }
    }
    class funcoes extends SuperHeroi {
        private $aumentarEnergia;
        private $calcularPoderMedio;
        
        public function __construct($id, $nome, $poderEspecial, $energia, $forca, $origem, $aumentarEnergia, $calcularPoderMedio){
            funcoes::setId($id);  
            funcoes::setNome($nome);
            funcoes::setPoderEspecial($poderEspecial);
            funcoes::setEnergia($energia);
            funcoes::setForca($forca);
            funcoes::setOrigem($origem);
            $this->aumentarEnergia = $aumentarEnergia;
            $this->calcularPoderMedio = $calcularPoderMedio;
       
        }
		
    public function aumentarEnergia($energia){   
        return $this->$energia * 119111467;
    }
	
	public function calcularPoderMedio($energia, $forca){
		$poderMedio = $energia + $forca;
		$poderMedio = $poderNovo / 2;
		return $poderMedio;
	}
  }
}

$SuperHeroi = new SuperHeroi('001','Goku', 'Kame-hame-haaaaa', 100K, 100K, 'Sayajin');
$SuperHeroi = new SuperHeroi('002','Harry Potter', 'Magia', 10k, 10k, 'Mundo mágico');
$SuperHeroi = new SuperHeroi('003','Super Mario', 'Quebrar muro', 1k, 1k, 'Cogumelo');
$SuperHeroi = new SuperHeroi('004','Batman', 'Ser Rico', 15K, 15K, 'Carverna');
?>