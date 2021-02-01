<?php

if (isset($_GET['sport'])) {
  echo "Les sports que vous avez choisi sont : <br>";

  foreach ($_GET['sport'] as $value) {
    echo " - ".$value."<br>";
  }
}
else {
  echo "Il n'y a pas tout les paramètres";
}