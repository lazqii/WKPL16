<?php
    class WordCount{                                //nama classnya yaitu WordCount
        public function countWords($sentence){      //method dengan nama countWords dengan parameter string $sentence
            return count(explode(" ", $sentence));  //explode digunakan untuk memecah string yang ada pada parameter $sentence menjadi array dengan spasi yang menajdi pemisahnya
                                                    //count sendiri digunakan untuk menghitung element array yang dihasilkan oleh explode tadi, jadi hal tersebut sama saja seperti menghitung jumlah katanya
        }
    }
?>