<?php
class mahasiswa{
    public $nim ="01";
    public $nama ="wildan";
    public $jurusan = "it";

    function tampil_biodata(){
        echo $this ->nim ;
        echo $this -> nama ;
    }
}
$mahasiswa = new mahasiswa();

$mahasiswa = tampil_biodata()
?>