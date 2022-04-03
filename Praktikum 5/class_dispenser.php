<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private  $volumeGelas;
    public  $namaMinuman;

    function isi($vol){
        $this->volume=$vol;
    }

}

class Minuman extends Dispenser
{
    public $uang;
    function __construct($nama_Minuman,$volGelas,$harga){
        $this->namaMinuman = $nama_Minuman;
        $this->volumeGelas = $volGelas;
        $this->hargaSegelas = $harga;
    }

    function volumeSetelah(){
        $this->volume =  $this->volume - $this->volumeGelas;
        return $this->volume;
    }

    function transaksi($uang){
        $this->uang = $uang;
        return $this->uang - $this->hargaSegelas;
    }

    function cetak(){
        echo "Nama Minuman : ". $this->namaMinuman."<br>";
        echo "Harga Segelas : ".$this->hargaSegelas."<br>";
        echo "Volume Segelas : ".$this->volumeGelas."<br>";
        echo "---------------------------------------------"."<br>";
        echo "Uang : ".$this->uang."<br>";
        echo "Sisa Uang : ".$this->transaksi($this->uang)."<br>";
        echo "Volume Asli : ".$this->volume."<br>";
        echo "Volume Dispenser Setelah Dibeli : ".$this->volumeSetelah();
    }
}

$minuman = new Minuman("Jus Jambu",500,9000);
$minuman->transaksi(10000);
$minuman->isi(2000);
$minuman->cetak();
?>