<?php

//namespace cedric;

function checkPassword($password) {

    echo '<h1 class="text-center">Cedric</h1>';
    echo '<div class"container">
            <p>Mot de passe: ' .$password;
    echo ' </p>
            <p class=text-end >Force du mot de passe </p>';

            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
            
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 12) {
                echo '<div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>';
                
            }
            
            else{
                echo '<div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>';
                echo '<br>';
                echo '<button type="button" class="btn btn-success">OK</button>';
            }
            echo '<br>';

            echo' <div class="row" >
                <ul class="list-group col-3 mx-auto">';
            echo '<li class="list-group-item active" aria-current="true">Le mot de passe doit contenir au moins:</li>';
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