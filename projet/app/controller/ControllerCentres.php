<!-- ----- debut ControllerCentres -->
<?php
require_once '../model/ModelCentres.php';

class ControllerCentres{
    
  public static function centresReadAll() {
  $results = ModelCentres::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/centres/viewAll.php';
  if (DEBUG)
   echo ("ControllerCentres : centresReadAll : vue = $vue");
  require ($vue);
 }
 
  public static function centresCreate() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/centres/viewInsert.php';
  require ($vue);
 }
 
 // La clé est gérée par le systeme et pas par l'internaute
 public static function centresCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelCentres::insert(
      htmlspecialchars($_GET['label']), htmlspecialchars($_GET['adresse'])
  );
  
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/centres/viewInserted.php';
  require ($vue);
 }
}
?>
<!-- ---- fin ControllerCentres -->