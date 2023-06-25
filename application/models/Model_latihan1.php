<?php
<<<<<<< HEAD
=======

>>>>>>> c44c7015047e80ae4f39d5f2ea2fdda378b2492a
class Model_latihan1 extends CI_Model
{
    //membuat variable untuk menampung nilai
    public $nilai1, $nilai2, $hasil;

    //method penjumlahan
<<<<<<< HEAD
    public function jumlah($nil1 = null, $nil2 = null)
    {
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
=======
    public function jumlah($n1 = null, $n2 = null)
    {

        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
>>>>>>> c44c7015047e80ae4f39d5f2ea2fdda378b2492a
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
