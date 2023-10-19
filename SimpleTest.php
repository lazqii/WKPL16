<?php
use PHPUnit\Framework\TestCase;


    require_once "Wordcount.php";                           //deklarasi class yang akan dites

    class SimpleTest extends TestCase{                      //class yang akan digunakan untuk mengetes WordCount
        public function testCountWords(){                   //method dengan nama testCountWords yang digunakan untuk mengetes class WordCount 
            $Wc = new WordCount();                          //inisialisasi objek baru dari class WordCount ke variabel $Wc
            $TestSentence = "My name is Gilang";            //inisialisasi kalimat My name is Gilang ke dalam variabel $TestSentence dimana terdapat 4 kata
            $WordCount = $Wc->countWords($TestSentence);    //memanggil method countWords dari objek $Wc pada baris 9 dengan $TestSentence sebagai argumennya
            $this->assertEquals(4, $WordCount);             //membandingkan nilai yang diharapkan yaitu 4 dengan nilai yang di return oleh method countWords yang ada pada class WordCount
                                                            //jika nilai tidak sama dengan yang diharapkan akan, outputnya akan berupa kesalahan.
        }
    }
?>