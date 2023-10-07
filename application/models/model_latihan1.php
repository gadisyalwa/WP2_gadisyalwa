<?php
class model_latihan1 extends CI_model
{
    //membuat variable untuk menampung nillai
    public $nilai1, $nilai2, $hasil;
    
    //method penjumlahan
    public function jumlah($n1, $n2)
{
    $this->nilai1 = $n1;
    $this->nilai2 = $n2;
    $this->hasil = $this->nilai1 + $this->nilai2;
    return $this->hasil;
}
}