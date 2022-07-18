<?php
interface IMonstro{
    
    //Deve exibir a ficha tecnica do mostro com:
    //pontosDeVida, poderDeAtaque, superAtaque, fraqueza,
    //nome e nome do dono.
    //Deve exibir com "echo" mesmo.
    public function fichaTecnica();
    
    public function setNome($nome);
    
    public function getNome();
    
    public function setNomeDono($nomeDono);
    
    public function getNomeDono();
    
    //Deve ser gerado a partir de um número randômico entre 0,100.
    public function setPontosDeVida($pontosDeVida);
    
    public function getPontosDeVida();
    
    //Deve ser gerado a partir de um número randômico entre 0,30.
    public function setPoderDeAtaque($poderDeAtaque);
    
    public function getPoderDeAtaque();
    
    //Deve ser gerado a partir de um número randômico entre 0,30.
    public function setSuperAtaque($superAtaque);
    
    public function getSuperAtaque();
    
    //Deve ser gerado a partir de um número randômico entre 0,30.
    public function setFraqueza($fraqueza);
    
    public function getFraqueza();
    
    //Deve conter 5 frases e sempre que for chamado retornar uma randomicamente.
    public function fraseDeAtaque();
    
    //Deve conter 5 frases e sempre que for chamado retornar uma randomicamente.
    function fraseDeDerrota();
    
    //Deve "retornar" um numero randomico a partir do máximo definido pelo construtor.
    function atacar();
    
    //Deve receber um número e subtrair da variavel respectiva aos pontos de vida do mostro.
    function subtrairPontosDeVida($qtdPontos);
    
    /*
    //Deve exibir, não é retornar, uma frase de ataque.
    function gritar();
    */
}
?>
