<?php


Class Unggas {
    var $alatgerak;
    var $jumlahkaki;

    public function terbang(){
        echo 'Burung, ayam dan angsa terbang dengan '.$this->alatgerak;
    }

    public function berkaki(){
        echo 'Burung, ayam dan angsa berkaki '.$this->jumlahkaki;
    }
}

Class Kendaraan {
    var $alatjalan;
    var $bensin;

    public function berjalan(){
        $this->alatjalan = 'roda';

        echo 'Saya berjalan menggunakan ' .$this->alatjalan;
    }

    public function bahanbakar(){
        $this->bensin = 'pertalite dan pertamax'; 
        echo 'saya menggunakan bahan bakar ' .$this->bensin;
    }
}


$macamunggas = new Unggas();

$kendaraankecil = new Kendaraan();
$kendaraankecil->bahanbakar(); 
?>