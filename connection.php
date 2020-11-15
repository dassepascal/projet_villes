<?php
echo '<h4>connection </h4>';
try {
  $bdd = new PDO('mysql:host=localhost; dbname=album;charset=utf8', 'root', '');
} catch (Exception $e) {
  die('Erreur:' . $e->getMessage());
}
