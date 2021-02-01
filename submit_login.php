<?php

if (isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['rad'])) {
  if ($_POST['login'] == "admin" && $_POST['mdp'] == "pwd") {
    echo "Vous etes connecté en administrateur !";
  }
  else {
    echo "Mauvais identifiants";
  }
}
else {
  echo "Il n'y a pas tout les paramètres";
}