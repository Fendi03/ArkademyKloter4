<?php 
    $string = "5 kata. Aku ingin sukses sebagai programmer";
    $hasil = str_word_count ($string);
    
    function tampil($hasil){
        $array = [$hasil];
        return json_encode($array);
    }

    echo tampil($hasil);
?>