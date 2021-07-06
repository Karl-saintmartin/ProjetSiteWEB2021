<!-- ----- fin ControllerVaccins -->

<?php
require_once '../model/ModelVaccins.php';

class ControllerVaccins{
    
     public static function vaccinsReadAll() {
  $results = ModelVaccins::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/vaccins/viewAll.php';
  if (DEBUG)
   echo ("ControllerVaccins : vaccinsReadAll : vue = $vue");
  require ($vue);
 }
 
  public static function vaccinsCreate() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/vaccins/viewInsert.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau vin.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function vaccinsCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelVaccins::insert(
      htmlspecialchars($_GET['label']), htmlspecialchars($_GET['doses'])
  );
  
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/vaccins/viewInserted.php';
  require ($vue);
 }
      public static function vaccinsUpdate() {
        // ----- Construction chemin de la vue
$results = ModelVaccins::GetVaccins();
        include 'config.php';
        $vue = $root . '/app/view/vaccins/viewUpdate.php';
        require ($vue);
 }
     public static function vaccinsUpdated() {
        // ----- Construction chemin de la vue
      
            $results= ModelVaccins::update($_GET['id'], $_GET['doses']); 
            
        
        include 'config.php';
        $vue = $root . '/app/view/vaccins/viewUpdated.php';
        require ($vue);
 }
}

?>
<!-- ----- fin ControllerVaccins -->