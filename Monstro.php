<?php



class Monstro extends SerVivo implements IMonstro{

   private $nome;
   private $nomeDono;
   
   //private $fraseDeAtaque = ['Haduken', 'Rasegan', 'Rajada Uivante', 'Final Flash', 'kamehameha'];
   //private $fraseDeDerrota = ['Game over', 'It lost', 'Failed', 'My condolences', 'Fatality'];


    function fichaTecnica(){
        
        //echo "<fieldset>";
        
        //echo "<fieldset><h3>▪︎START GAME NOW▪︎</h3></fieldset><br>";
        
        echo "<b>》Nome do monstro: </b>".$this->getNome()."<br>";
        echo "<b>》Dono do monstro: </b>".$this->getNomeDono()."<br>";
        echo "<b>》Vivo: </b>".$this->getVivo()."<br>";
        echo "<b>》Pontos de Vida: </b>".$this->getPontosDeVida()."<hr><br>";
        
        echo "<b>》Fraqueza: </b>".$this->getFraqueza()."<br>";
        echo "<b>》Dano causado pelo Ataque: </b>".$this->getPoderDeAtaque()."<br>";
        echo "<b>》Dano causado pelo Super Ataque: </b>".$this->getSuperAtaque()."<br><br>"; 
    }

    /*function fichaTecnica1(){
        echo "<b>Fraqueza: </b>".$this->getFraqueza()."<br>";
        echo "<b>Danos do Ataque: </b>".$this->getPoderDeAtaque()."<br>";
        echo "<b>Danos do Super Ataque: </b>".$this->getSuperAtaque()."<br><hr>";
           
    }*/

    function getNome(){
        return "Vingador Negro";    
    }
    
    function setNome($nome){
        $this->nome = $nome;
    }

    function getNomeDono(){
        return "Elson Souza";    
    }
    
    function setNomeDono($nomeDono){
        $this->nomeDono = $nomeDono;
    }

    public function fraseDeAtaque(){
        $frases = ['Haduken', 'Rasegan', 'Rajada Uivante', 'Final Flash', 'kamehameha'];
        return $frases[rand(0,4)];
    }

    function atacar(){
      return rand(5, $this->getPoderDeAtaque());
    }

    public function subtrairPontosDeVida($qtdPontos){
        $pontos = $this->getPontosDeVida() - $qtdPontos;
        $this->setPontosDeVida($pontos);    

      if($this->getPontosDeVida()<=0){
          echo $this->fraseDeDerrota();
          echo "<fieldset><h3>Game over!!</h3></fieldset><br>";
        }     
    }

    function fraseDeDerrota(){
        $frases = ['Game over', 'It lost', 'Failed', 'My condolences', 'Fatality'];
        return $frases[rand(0,4)];;
    }
}
        
?>
