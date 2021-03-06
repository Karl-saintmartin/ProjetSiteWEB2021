<!-- ----- debut ModelPatients -->
<?php
require_once 'Model.php';

class ModelPatients{
    
    private $id, $nom, $prenom, $adresse;
    
     public function __construct($id = NULL, $nom = NULL, $prenom = NULL, $adresse = NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($id)) {
   $this->id = $id;
   $this->nom = $nom;
   $this->prenom = $prenom;
   $this->adresse = $adresse;
  
  }
 }
 
  function setId($id) {
  $this->id = $id;
 }
 
   function setNom($nom) {
  $this->nom = $nom;
 }
 
  function setPreom($prenom) {
  $this->prenom = $prenom;
 }
 
 
   function setAdresse($adresse) {
  $this->adresse = $adresse;
 }
 
  function getId() {
  return $this->id;
 }
 
  function getNom() {
  return $this->nom;
 }
 
   function getPrenom() {
  return $this->prenom;
 }
   function getAdresse() {
  return $this->adresse;
 }

  public static function getAll() {
  try {
   $database = Model::getInstance();
   $query = "select * from patient";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelPatients");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 
  public static function insert($nom,$prenom,$adresse) {
  try {
   $database = Model::getInstance();

   // recherche de la valeur de la clé = max(id) + 1
   $query = "select max(id) from patient";
   $statement = $database->query($query);
   $tuple = $statement->fetch();
   $id = $tuple['0'];
   $id++;

   // ajout d'un nouveau tuple;
   $query = "insert into patient value(:id, :nom, :prenom, :adresse)";
   $statement = $database->prepare($query);
   $statement->execute([
     'id' => $id,
     'nom' => $nom,
     'prenom' => $prenom,
     'adresse' => $adresse
     
   ]);
   return $id;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }
 
     
    
 
}

?>
<!-- ----- fin ModelPatients -->