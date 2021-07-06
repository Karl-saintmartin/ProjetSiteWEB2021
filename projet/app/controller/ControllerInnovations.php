<?php
require_once '../model/ModelStocks.php';
require_once '../model/ModelCentres.php';
require_once '../model/ModelVaccins.php';
require_once '../model/ModelDossiers.php';
require_once '../model/ModelInnovations.php';

class ControllerInnovations{
    
     public static function innovationsReadCentre() {
  $results = ModelInnovations::getCentre();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/innovations/viewAdd.php';
 
  
  require ($vue);
 }
     public static function innovationsReadCentreVaccin() {
  $results2 = ModelInnovations::getCentreVaccin($_GET['centre_id']);
  $results3 = ModelInnovations::getCentreVaccin($_GET['centre_id']);
   $results4 = ModelInnovations::getCentreVaccin($_GET['centre_id']);
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/innovations/viewgraphe.php';
 
  
  require ($vue);
 }
 public static function innovationsReadCentreAdress() {
  $results8 = ModelInnovations::getCentresAdress();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/innovations/viewMap.php';
 
  require ($vue);
 }

 

 }

?>