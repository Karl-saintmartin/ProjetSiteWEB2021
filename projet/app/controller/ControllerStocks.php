<!-- ----- fin ControllerStocks -->

<?php
require_once '../model/ModelStocks.php';
require_once '../model/ModelCentres.php';
require_once '../model/ModelVaccins.php';

class ControllerStocks{
    
     public static function stocksReadAll() {
  $results = ModelStocks::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/stocks/viewAll.php';
 
  
  require ($vue);
 }
 
      public static function stocksReadGlobal() {
  $results = ModelStocks::getGlobal();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/stocks/viewAll.php';
 
  
  require ($vue);
 }
     public static function stocksAdd() {
  $results1 = ModelStocks::getVaccins();
    $results2 = ModelStocks::getCentres();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/stocks/viewAdd.php';
 
  
  require ($vue);
 }
 
     public static function stocksAdded() {
   $results = ModelStocks::insert($_GET['centre_id'], $_GET['vaccin_id'], $_GET['quantite']);       
      if ($results == '23000'){
  $resultsA = ModelStocks::update($_GET['centre_id'], $_GET['vaccin_id'], $_GET['quantite']);
      }
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/stocks/viewAdded.php';
 
  
  require ($vue);
 }
}

?>
<!-- ----- fin ControllerStocks -->