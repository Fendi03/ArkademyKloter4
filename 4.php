<?php 
    $string = "20, 30, 40, 50, 30, 40, 50";
    $hasil = "3";
    
    function tampil($hasil){
        $array = [$hasil];
        return json_encode($array);
    }

    echo tampil($hasil);
?>