<?php
 // Permet de sécuriser une chaine de caractére
  function str_secur($string){
      return trim(htmlspecialchars($string));
  }

  // Debug plus lisible des différente variable
  function debug($var){
      echo'<pre>';
      var_dump($var);
      echo '</pre>';
  }
?>