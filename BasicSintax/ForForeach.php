<?php
    $nomes = ["Shigaraki", "Dabi", "Toga", "Compress", "Spinner", "Kurogiri"];
    for($i = 0; $i<sizeof($nomes); $i++){
        echo $nomes[$i];
        echo " ";
    }

    echo "<br> <br>";
    echo "<br> Ghouls: <br><br>";
    $ghouls = ["Kaneki", "Touka", "Hinami","Ayato", "Eto"];
    foreach($ghouls as $ghoul){
        echo $ghoul,"<br>";
    }

    echo "<br> <br>";
    echo "<br> Times Paulistas <br><br>";
    $times = array("OSA" => "Osasco FC", "COR" => "Corinthians", "SP" => "São Paulo", "PAL" => "Palmeiras");
    foreach ($times as $timeCod => $nomeTime) {
        print("O time é $nomeTime e sua abrevição é $timeCod <br>");
    }
?>