<?php
/*
    Script d'extraction et de formatage léger des offres
*/

// Récupération de l'URL des offres étudiantes
$STUDENT_PACK_URL = "https://raw.githubusercontent.com/DataScIIEnce-ENSIIE/student-pack/main/offers.yaml";
$content = file_get_contents($STUDENT_PACK_URL);

// Récupération du parser YAML
include "../path/to/spyc.php";

// Parsing du YAML
$offers = Spyc::YAMLLoad($content)["offers"];

//var_dump($offers);
$i = 0;
foreach ($offers as $offer){
    if ($i == 0){
        echo "<div class='row mb-3'>";
    }
    $i += 1;
    echo "
    <div class='col-sm-6'>
        <div class='card'>
            <div class='card-body'>
                <h5 class='card-title'>".$offer["title"]."</h5>
                <p class='card-text'>".$offer["desc"]."</p>
                <a href='".$offer["url"]."' class='btn btn-outline-primary'>Accéder à l'offre &nbsp;<i class='fa fa-arrow-right'></i></a>
            </div>
        </div>
    </div>
    ";

    if ($i == 2){
        echo "</div>";
        $i = 0;
    }
}
?>