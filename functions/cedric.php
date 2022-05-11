<?php

namespace cedric;

function checkPassword($password) {

    echo '<h1 class="text-center">Cedric</h1>';
    echo '<div class"container">
            <p>Mot de passe: ' .$password;
    echo ' </p>
            <p class=text-end >Force du mot de passe </p>';

            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password); //#\W+#
            $carac_number = strlen($password) >= 12;

            $tableau = array (
                "majuscule" => $uppercase,
                "minuscule" => $lowercase,
                "nombre" => $number,
                "special" => $specialChars,
                "nombre_carac" => $carac_number,
            );

            $tableau_filtre = array_filter($tableau);
            count($tableau_filtre);
            
            if (count($tableau_filtre) == 0){
                echo '<div class="progress">
                       <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>';   
            }
            if (count($tableau_filtre) == 1){
                echo '<div class="progress">
                       <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"  role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>';   
            }
            if (count($tableau_filtre) == 2){
                echo '<div class="progress">
                       <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"  role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>';   
            }
            if (count($tableau_filtre) == 3){
                echo '<div class="progress">
                       <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"  role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>';   
            }
            if (count($tableau_filtre) == 4){
                echo '<div class="progress">
                       <div class="progress-bar progress-bar-striped progress-bar-animated"  role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>';   
            }
            if (count($tableau_filtre) == 5){
                echo '<div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>';
                echo '<br>';
                echo '<div class="d-grid gap-2 col-1 mx-auto"><button type="button" class="btn btn-success">OK</button></div>';   
            }
            
            echo '<br>';

            echo' <div class="col-4 mx-auto" >
                <ul class="list-group">';
            if (count($tableau_filtre) == 5){
                echo '';   
            }
            else {
                echo '<li class="list-group-item active text-center" aria-current="true">Le mot de passe doit contenir au moins:</li>';
            }

            if (!$number) {
                echo '<li class="list-group-item">1 chiffre</li>';
            }
            else {
                echo ' ';
            }
            if (!$lowercase) {
                echo '<li class="list-group-item">1 minuscule</li>';
            }
            else {
                echo ' ';
            }
            if (!$uppercase) {
                 echo '<li class="list-group-item">1 majuscule</li>';
            }
            else {
                echo ' ';
            }
            
           if (!$specialChars) {
            echo '<li class="list-group-item">1 caractère spécial</li>';
            }
            else {
                echo ' ';
            }
            if (strlen($password) < 12) {
                echo '<li class="list-group-item">12 caractères</li>';
            }
            else {
                echo ' ';
            }
            
            echo'    
                </ul>
            </div>
        </div>';
    // ...
}

?>