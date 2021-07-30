<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06-paskaita</title>

</head>


<body>


<!---is serverio puses neatvaizduoti kodo-->

<?php if (isset($_COOKIE["prisijungti"])) { ?>

<div class="prisijungimas">
    <form action="index.php" method="get">
        <input type="text" name="vardas" placeholder="Suveskite varda"/>
        <input type="password" name="slaptazodis" placeholder="Suveskite slaptazodi"/>
        <button type="submit" name="prisijungti"> Prisijungti</button>
    </form>
</div>

<?php } ?>


<?php
   // PADARYTA PASKAITOJE SU DESTYTOJU 
// 3. Sukurkite du input laukelius. Vienas -  vardas, kitas - slaptažodis. Susigalvokite vardą ir slaptažodį. Pvz. vardas - "admin",
//slaptažodis - "123456". 
// sugalvota kombinacija sutampa su tuo, kas įvesta į input laukelius, išvedamas pranešimas - "prisijungėte sėkmingai", kitu atveju - "Įvesti duomenys neteisingi".

//4. Papildikite 3 programą:
// *Jei duomenys yra įvesti teisingi, vartotojas nukreipiamas į failą - manopaskyra.php.
//   *Kitu atveju, vartotojas nukreipiamas į puslapį - 404.php


        if(isset($_GET["prisijungti"])) {
            // masyvas ir masyvo duomenys
            $registruotiVartotojai= array (

                array(
                    "vardas"=>"admin", 
                    "slaptazodis"=>"admin",
                    "teises"=>1
                ),

                array(
                    "vardas"=>"admin123", 
                    "slaptazodis"=>"admin123",
                    "teises"=>2
                ),

                array(
                    "vardas"=>"admin456", 
                    "slaptazodis"=>"admin456",
                    "teises"=>3
                ),

                array(
                    "vardas"=>"admin678", 
                    "slaptazodis"=>"admin678",
                    "teises"=>4
                ),

                array(
                    "vardas"=>"admin135", 
                    "slaptazodis"=>"admin135",
                    "teises"=>5
                ),

                array(
                    "vardas"=>"admin246", 
                    "slaptazodis"=>"admin246",
                    "teises"=>"admin",
                ),

                array(
                    "vardas"=>"admin369", 
                    "slaptazodis"=>"admin369",
                    "teises"=>6
                ),

                array(
                    "vardas"=>"admin333", 
                    "slaptazodis"=>"admin333",
                    "teises"=>7
                ),

                array(
                    "vardas"=>"admin999", 
                    "slaptazodis"=>"admin999",
                    "teises"=>8
                ),

                array(
                    "vardas"=>"admin356", 
                    "slaptazodis"=>"356",
                    "teises"=>9
                ),

                array(
                    "vardas"=>"admin666", 
                    "slaptazodis"=>"admin666",
                    "teises"=>10
                ),

            );
            
    // tikrinimas ar laukeliuose ivesti duomenys teisingi ir ar ne tusti       
    if (isset($_GET["vardas"])&& !empty($_GET["vardas"]) && isset($_GET["slaptazodis"])&& !empty($_GET["slaptazodis"]) )
        {
            $vardas=$_GET["vardas"];
            $slaptazodis=$_GET["slaptazodis"];


        // masyvas prilyginamas elementui 
        foreach ($registruotiVartotojai as $elementas) {
            
            // sukuriamas tikrinimas ar teisingas domuo ir laikinieji prisijungimai
            $teisingasDomuo= false; 
            $laikinasis_vardas=""; 
            $laikinasis_teises=""; 


            if ($vardas==$elementas["vardas"] && $slaptazodis==$elementas["slaptazodis"]) {
                $teisingasDomuo= true; 
                $laikinasis_vardas=$elementas["vardas"]; 
                $laikinasis_teises=$elementas["teises"]; 
                break; 
            }
        }
        
        if ($teisingasDomuo) {
           // echo $elementas["vardas"];
           // echo $elementas["pavarde"];
            echo "sveikas atvykes,". $laikinasis_vardas. "" . $laikinasis_teises;
            // coockies dedamas po to kai 
            //prisijungtimas yra sekmingas- prisijungimas isaugomas nurodomam laikui
            setcookie("prisijungti", $laikinasis_vardas, time()+3600*24, "/"); 
            setcookie("teises", $laikinasis_teises, time()+3600*24, "/");
           
            header("Location: manopaskyra.php"); 

        } else {
            echo "bandykite is naujo"; 
        }
    

        } else {
            echo "laukeliai yra tusti"; 
        }

        var_dump($registruotiVartotojai); 
    }

//3. Sukurkite du input laukelius. //Vienas -  vardas, kitas - slaptažodis. 
// susikurti registruotu vartotoju masyva (10)
// registruotu vartotoju masyve suvesti teisiu duomenis 
// 1- administratorius
// 2- paprastas vartotojas
// 3- turinio redaguotojas

// Jei sugalvota kombinacija sutampa su tuo, kas įvesta į input laukelius, 
   //*Jei duomenys yra įvesti teisingi, vartotojas nukreipiamas į failą - manopaskyra.php.
        // sveikas atvykes ir kreipimasi (varda)
   //*Kitu atveju, vartotojas nukreipiamas į puslapį - 404.php
// svetaine turi atsiminti, kad vartotojas yra prisijunges (naudojant cookies)
// manopaskyra.php turi buti mygtukas "Atsijungti"


?>
    
</body>
</html>
