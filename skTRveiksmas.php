<?php

$rezultatoZinute="";
 

if (isset($_GET["sveikas1"]) &&  !empty ($_GET["sveikas1"]) 
    && isset($_GET["vardiklis1"]) && !empty ($_GET["vardiklis1"]) 
    && isset($_GET["skaitiklis1"]) && !empty ($_GET["skaitiklis1"]) 

    && isset($_GET["veiksmas"]) && !empty ($_GET["veiksmas"])
    
    && isset($_GET["sveikas2"]) &&  !empty ($_GET["sveikas2"]) 
    && isset($_GET["vardiklis2"]) && !empty ($_GET["vardiklis2"]) 
    && isset($_GET["skaitiklis2"]) && !empty ($_GET["skaitiklis2"]) ) {
     


    $sveikojiDalis1=$_GET["sveikas1"];
    $vardiklis1=$_GET["vardiklis1"];
    $skaitiklis1=$_GET["skaitiklis1"];
    $sveikojiDalis2=$_GET["sveikas2"];
    $vardiklis2=$_GET["vardiklis2"];
    $skaitiklis3=$_GET["skaitiklis2"];
    $veiksmas=$_GET["veiksmas"];

    $rezultatas=0; 

    // sudetis
    if ($veiksmas=="+") {

        $pirmaTR=$sveikojiDalis1*$vardiklis1+$skaitiklis1; 

        $antraTR=$sveikojiDalis2*$vardiklis2+$skaitiklis2;


        $rezultatas=$pirmaTR+$pirmaTR;
        $rezultatoZinute="Suma yra:";
    }

    
} else {
    $rezultatoZinute= "Patikrinti ar ivesti visi duomenys"; 
}

?>


