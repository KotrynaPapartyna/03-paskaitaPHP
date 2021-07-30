
<body>

<form action="nusidazyk.php" method="post">
    <input type="text" value="spalva" name="spalva"/>
       
    <button type="submit">Nusidazyk</button>
</form>

<?php
// 5. Sukurkite programą, kurioje perdavus kintamuosius 
// per POST "juoda", "raudona", "melyna", 
// puslapis nusidažo atitinkama spalva.

$rezultatas="";
$spalva=$_POST["spalva"];

    
if (isset($_POST["spalva"]) && !empty($_POST["spalva"])) {
    echo $spalva; 

    if($spalva=="juoda") {
        $rezultatas="";
        
    } else if ($spalva=="raudona") {
        $rezultatas="";

    } else if ($spalva=="melyna") {
        $rezultatas="";
        
    } else {
        $rezultatas="";
        echo "ivesta ne tokia spalva";
    } 
} 

// tuksta isvedimo TRUKSTA ISVEDIMO 


?>

<?=$_POST['spalva']?>




    
</body>
</html>