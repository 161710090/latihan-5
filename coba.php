<?php
 
 class Sepeda{
    var $merek;
    var $warna;
    var $harga;
    var $cc;

    function __construct($merek,$warna,$harga,$panjang){
       $this->merek = $merek;
       $this->warna = $warna;
       $this->harga = $harga;
       $this->panjang= $panjang;
    }
    function get_merek(){
        return $this->merek;
    }
    function get_warna(){
        return $this->warna;
    }
    function get_harga(){
        return $this->harga;
    }
    function get_panjang(){
        return $this->panjang;
    }
    
}
?>
