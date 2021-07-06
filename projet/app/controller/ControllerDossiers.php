<!-- ----- debut ControllerDossiers -->

<?php
require_once '../model/ModelStocks.php';
require_once '../model/ModelCentres.php';
require_once '../model/ModelVaccins.php';
require_once '../model/ModelDossiers.php';

class ControllerDossiers{
    
     public static function dossiersReadAll() {
  $results = ModelDossiers::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/dossiers/viewAll.php';
 
  
  require ($vue);
 }
 
      public static function dossiersReadGlobal() {
  $results = ModelDossiers::getGlobal();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/dossiers/viewAll.php';
 
  
  require ($vue);
 }
     public static function dossiersAdd() {
  $results1 = ModelDossiers::getPatients();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/dossiers/viewAdd.php';
 
  
  require ($vue);
 }
      public static function dossiersAdded1() {
     
         $results2 = ModelDossiers::getNumber($_GET['patient_id']); 
        echo("<");
         if ($results2 != 0) {
            $results3 = ModelDossiers::getNumber2($_GET['patient_id']);
            $results3B = ModelDossiers::getNumber3($results3); ;
            $results4 = ModelDossiers::getListe($results2, $results3);
            
         }
         else{
             $results3B = "BINGO";
             $results3 = "BINGOO";
             $results4 = ModelDossiers::getListe2();
         }
         
            include 'config.php';
  $vue = $root . '/app/view/dossiers/viewAdded.php';

  require ($vue);
 }
     public static function dossiersAdded2() {
         
         $results5 = ModelDossiers::insert($_GET['patient_id'], $_GET['doses'], $_GET['vaccin_id'],$_GET['centre_id']);
          $results6 = ModelDossiers::update($_GET['centre_id'], $_GET['vaccin_id']);
         

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/dossiers/viewAdded2.php';
 
  
  require ($vue);
 }


     public static function dossiersAdded3() {
         $results9 = ModelDossiers::getListe3($_GET['centre_id']);
         $results5 = ModelDossiers::insert($_GET['patient_id'], 0, $results9,$_GET['centre_id']);
          $results6 = ModelDossiers::update($_GET['centre_id'], $results9);
         

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/dossiers/viewAdded3.php';
 
  
  require ($vue);
 }
}

?>
<!-- ----- fin ControllerDossiers -->