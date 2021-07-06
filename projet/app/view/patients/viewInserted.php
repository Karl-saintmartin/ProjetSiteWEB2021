
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCovidMenu.html';
    include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
    ?>
    <!-- ===================================================== -->
   
 <?php
   echo(" <div class='container'>");
      echo(  "<div class='panel panel-default'>");
        echo(  "<div class='panel-heading'>");
            echo("<h3 class='panel-title'>Bilan</h3>");
         echo( "</div>");
          echo("<div class='panel-body'>");
    if ($results != -1 ) {
     echo ("<h3>Le nouveau patient a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>id = " . $results . "</li>");
     echo ("<li>nom = " . $_GET['nom'] . "</li>");
     
      echo ("<li>prenom = " . $_GET['prenom'] . "</li>");
     echo ("<li>adresse = " . $_GET['adresse'] . "</li>");

     echo("</ul>");
    } else {
     echo ("<h3>Problème d'insertion du Patient</h3>");
 echo ("<li>nom = " . $_GET['nom'] . "</li>");
     
      echo ("<li>prenom = " . $_GET['prenom'] . "</li>");
     echo ("<li>adresse = " . $_GET['adresse'] . "</li>");
        echo ("<li>id = " . $results . "</li>");
    }
           echo("</div>");
    echo("</div>"); 
    echo("</div>");
    

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCovidFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    