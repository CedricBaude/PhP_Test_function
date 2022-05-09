<?php

//namespace cedric;

function checkPassword($password) {

    echo '<h1 class="text-center">Cedric</h1>';
    echo '<div class"row">
            <p>Mot de passe: ' .$password;
    echo ' </p>
            <p class=text-end >Force du mot de passe </p>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>


            <div class=" row col-3 align-self-center">
                <ul class="list-group ">
                <li class="list-group-item active" aria-current="true">An active item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
                </ul>
            </div>


        </div>';

    // ...

}


?>