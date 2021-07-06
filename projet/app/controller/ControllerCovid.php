<!-- ----- debut ControllerCovid -->
<?php
require_once '../model/ModelVaccins.php';
class ControllerCovid {
 // --- page d'acceuil

         public static function covidAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewAccueil.php';
  if (DEBUG)
   echo ("ControllerCovid : covidAccueil : vue = $vue");
  require ($vue);
 }

    


}
?>
<!-- ----- fin ControllerCovid -->
