<!-- ----- début viewAll -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      ?>

        <div class="panel panel-success">
            <div class="panel-heading"><strong>Correction de bug :</strong> Static</div>
            <div class="panel-body">
                 <p>La méthode statique view() est une méthode qui utilise les attributs de l'objet "$this->...". Or comme c'est une méthode statique elle peut être appelé en dehors du contexte de l'objet, on peut donc l'appeler sans créer d'objet et donc sans avoir d'attributs. Il y a donc un problème car on ne peut pas afficher ces attributs sans créer d'objet.</p>
    <br/>
        <p>Il faut donc changer cette méthode et enlever "static" pour qu'on ne puisse appeller cette méthode que lorsque l'on a un objet de crée.</p>
       <br/>
            </div>
        </div>
        
        
        <div class="panel panel-info">
            <div class="panel-heading"><strong>Idée simplificatrice :</strong> Formulaires généraux de sélection de vin et de producteur</div>
            <div class="panel-body">
               Pouvoir sélectionner un vin par n'importe laquelle de ses caractéristiques serait une fonctionnalité bien plus intéréssante.
                <br />
                On pourrait ainsi étendre ce mode de séléction aux producteurs etc...
                <br />
                Le formulaire de sélection pour les vins pourrait ressembler au suivant. Les champs vides ne seront pas traités.
                <br /><br />
                <form role="form" method='get' action=''>
                    <div class="form-group">
                      <input type="hidden" name='action' value=''>
                      <label for="id">id : </label>
                      <select class="form-control" id='id' name='id' style="width: 100px">
                          <?php
                          for ($i=1; $i<=100; $i++) {
                           echo ("<option>$i</option>");
                          }
                          ?>
                      </select>
                      <br />
                      <label for="cru">Cru : </label> <input id="cru" class="form-control" type="text" name="cru" value="Chapelle Chambertin" size="30" />
                      <br />
                     
                      <label for="degre">Degré : </label> <input id="degre" class="form-control" type="text" name="degre" value="12" size="6" />
                      <br />
                      <label for="annee">Année : </label> <input id="annee" class="form-control" type="text" name="annee" value="1998" size="6" />
                    </div>
                    <button class="btn btn-success" type="submit">Submit form</button>
                  </form>
                </div>
            </div>
        </div>
      
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->