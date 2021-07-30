<?php 

$rezultatoZinute="";
$rezultatoKlase=""; 

if (isset($_GET["skaicius1"]) && !empty ($_GET["skaicius1"]) && isset($_GET["veiksmas"]) && !empty ($_GET["veiksmas"]) && isset($_GET["skaicius2"]) && !empty ($_GET["skaicius2"]) ) {
    $skaicius1=$_GET["skaicius1"];
    $veiksmas=$_GET["veiksmas"];
    $skaicius2=$_GET["skaicius2"];
    $rezultatas=0; 

    // sudetis
    if ($veiksmas=="+") {
        $rezultatas=$skaicius1+$skaicius2;
        $rezultatoZinute="Suma yra:";
    }

    // atimtis 
    if ($veiksmas=="-") {
        $rezultatas=$skaicius1-$skaicius2;
        $rezultatoZinute="Skirtumas yra:";
    }
    // daugyba 
    if ($veiksmas=="*") {
        $rezultatas=$skaicius1*$skaicius2;
        $rezultatoZinute="Sandauga yra:";
    }

    // dalyba 
    if ($veiksmas=="/") {
        $rezultatas=$skaicius1/ $skaicius2;
        $rezultatoZinute="Dalmuo yra:";
    }

} else {
    $rezultatoZinute= "Patikrinti ar ivesti visi duomenys"; 
}

?>
<div class="pranesimas" <?php echo $rezultatoKlase ?>>
    <?php echo $rezultatoZinute . $rezultatas; ?>
</div>