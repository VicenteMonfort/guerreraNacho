<?php
#testing Lituania
class Guerrera
{
    public $nombre; #Nombre de la guerrera
    public $vida; #Valor de la vida que posee
    public $estado; #La guerrera estará 'viva' o 'muerta', dependiendo del valor de su vida. >0 = viva; <=0 = muerta

    public function __construct($a1,$a2,$a3)
    {
        $this->nombre=$a1;
        $this->vida=$a2;
        $this->estado=$a3;
    }

    public function herida(){
        $this->vida-=10;
        if ($this->vida <= 0) {
            $this->estado='muerta';
        }
        return $this->vida;
    }

    public function pocion(){
        $this->vida+=10;
        if ($this->vida > 0 && $this->estado == 'muerta'){
            $this->estado = 'viva';
        }
        return $this->vida;
    }
}
?>
