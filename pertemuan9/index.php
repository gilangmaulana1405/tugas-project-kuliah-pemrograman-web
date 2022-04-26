<?php
class Book{
    private $kodeBuku;
    private $qty;
    private $nama;

    public function setQtyCode($kodeBuku, $nama, $qty){
        $this->kodeBuku = $kodeBuku;
        $this->nama = $nama;
        $this->qty = $qty;
    }

    public function getQtyCode(){
        if (preg_match("/^[A-Z]{2}[0-9]{2}$/", $this->kodeBuku)){
            if($this->qty < 1){
                return "Buku tidak tersedia";
            }
            else{
            return $this->kodeBuku . "-" . $this->nama . "-" . $this->qty .
            " <br><br> Buku  '$this->nama' kode $this->kodeBuku tersedia $this->qty di stok."; 
            }
        }
        
        else{
            return "Kode buku salah";
        }
    }

    public function getQty(){
        return $this->qty;
    }

    public function getCode(){
        return $this->kodeBuku;
    }
}

$book_one = new Book();
$book_one->setQtyCode('A001', 'Naruto', 14);

echo $book_one->getQtyCode();