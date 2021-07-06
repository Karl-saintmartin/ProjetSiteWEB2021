<!-- ----- début viewUpdated -->
<?php
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCovidMenu.html';
      include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
      if ($results){
           echo '<h3>vaccin mise à jour</h3>';
            echo ("<li>vaccin numéro " . $_GET['id'] . " mise à jour avec " . $_GET['doses'] . " doses</li>");
  
    
      }
      else{
         echo '<h3>erreur</h3>';
      }
      ?>
      
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

  <!-- ----- fin viewUpdated -->