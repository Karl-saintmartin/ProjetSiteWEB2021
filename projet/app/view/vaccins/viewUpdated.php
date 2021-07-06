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
         echo(" <div class='container'>");
      echo(  "<div class='panel panel-default'>");
        echo(  "<div class='panel-heading'>");
            echo("<h3 class='panel-title'>Vaccin mis à jour.</h3>");
         echo( "</div>");
          echo("<div class='panel-body'>");
            echo ("<li>vaccin numéro " . $_GET['id'] . " mis à jour avec " . $_GET['doses'] . " doses</li>");
    echo("</div>");
    echo("</div>"); 
    echo("</div>");
    
    echo("</div>");
    
      }
      else{
              echo(" <div class='container'>");
      echo(  "<div class='panel panel-default'>");
        echo(  "<div class='panel-heading'>");
            echo("<h3 class='panel-title'>Vaccin non mis à jour.</h3>");
         echo( "</div>");
          echo("<div class='panel-body'>");
         echo '<h3>erreur</h3>';
               echo("</div>");
    echo("</div>"); 
    echo("</div>");
    
    echo("</div>");
      }
      ?>
      
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

   <!-- ----- fin viewUpdated -->