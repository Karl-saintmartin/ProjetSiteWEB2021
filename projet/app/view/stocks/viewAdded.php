
<!-- ----- début viewAdded -->
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

  
    
     echo ("<h3>La quantité a été ajouté </h3>");
     echo("<ul>");
     echo ("<li>vaccin_id = " . $_GET['vaccin_id'] . "</li>");
     echo ("<li>centre_id = " . $_GET['centre_id'] . "</li>");
     echo ("<li>quantite ajouté = " . $_GET['quantite'] . "</li>");
    

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCovidFooter.html';
    ?>
    <!-- ----- fin viewAdded -->   

    
    