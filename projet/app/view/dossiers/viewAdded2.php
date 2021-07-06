
<!-- ----- début viewAdded2 -->
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
 
     echo("<ul>");
     echo ("<li>vaccin_id = " .$_GET['vaccin_id']. "</li>");
     echo ("<li>centre_id = ". $results6. "</li>");
     echo ("<li>quantite injectée = 1</li>");
          echo("</div>");
  echo("</div>");
    echo("</div>"); 

    echo("</div>");
    
 
    ?>
  </div>
    <?php
       include $root . '/app/view/fragment/fragmentCovidFooter.html';
       php?>
    <!-- ----- fin viewAdded2 -->    

    
    