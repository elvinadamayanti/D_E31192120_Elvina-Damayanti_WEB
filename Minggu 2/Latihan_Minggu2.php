<?php
class Laptop{
  public $pemilik, $merk;

  public function __construct( $merk, $pemilik){
    $this->pemilik = $pemilik;
    $this->merk = $merk;
  }  

  public function hidupkan_laptop(){
    return "Hidupkan laptop $this->merk punya $this->pemilik\n";
  }

  public function matikan_laptop(){
    return "Matikan laptop $this->merk punya $this->pemilik\n";
  }

  public function restart_laptop(){
    return "Matikan laptop $this->merk punya $this->pemilik, Hidupkan laptop $this->merk punya $this->pemilik\n";
  }
}

$MacbookA = new Laptop('Macbook', 'A'); 
$asusB = new Laptop('Asus', 'B'); 
$toshibaC = new Laptop('Toshiba', 'C'); 

echo($MacbookA->hidupkan_laptop());
echo($asusB->matikan_laptop());
echo($toshibaC->restart_laptop());
?>