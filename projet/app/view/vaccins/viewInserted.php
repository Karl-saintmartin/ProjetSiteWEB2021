
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
     echo ("<h3>Le nouveau vaccin a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>id = " . $results . "</li>");
     echo ("<li>cru = " . $_GET['label'] . "</li>");
     echo ("<li>doses = " . $_GET['doses'] . "</li>");

     echo("</ul>");
    } else {
     echo ("<h3>Problème d'insertion du Vaccin</h3>");
     echo ("id = " . $_GET['label']);
    }
       echo("</div>");
    echo("</div>"); 
    echo("</div>");
    
    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCovidFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    