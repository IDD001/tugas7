<?php 
class Mobil{
    private $mesin;
    public $warna;
    function __construct($mesin, $warna){
        $this->mesin = $mesin;
        $this->warna = $warna;
    }
 
    public function mesin(){
       echo $this->mesin;
       echo $this->warna;
    }
}


$mobil = new Mobil("Matic", "Merah");

echo $mobil->mesin();

