<?php 
    $name = "Syaifudin Fendi Prasetyo";
    $age  = 18 ;
    $address    = "Sukoharjo, Jawa Tengah";
    $hobbys     = ["Bermain Game","Menulis", "Berkecimpung di dunia software (mod game/aplikasi)"];
    $is_married = false;
    $list_school= [
        "name: SMK Negeri 6 Sukoharjo",
      "year_in: 2016",
      "year_out: 2019",
      "major: Multimedia"];
    $skill      = 
    ["Coding"=>'beginner',"Video Editor"=>'beginner', "Graphic Designer"=>'advanced', "Mathematics"=>'advanced'];
    $interest_in_coding = true;
    
    function tampil($name,$age){
        $array = [$name,$age];
        /* implode() */
        return json_encode($array);
    }

    echo tampil($name,$age);
    // var_dump (json_decode(tampil($name,$age)));
?>