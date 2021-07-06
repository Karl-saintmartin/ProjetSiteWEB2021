
<!-- ----- début viewMap -->
<?php
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCovidMenu.html';
    include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
    ?>
      
      
      <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Nom du centre</th>
          <th scope = "col">adresse</th>
          <th scope = "col">Lien</th>
   
        </tr>
      </thead>
      <tbody>
          <?php
                while ($row = $results8->fetch())
                {
                    for ($counter = 0; $counter < $results8->columnCount(); $counter +=2) 
                    {
                        $c = $counter + 1;
                        echo ("<tr><td>$row[$counter]</td>");
                        echo ("<td>$row[$c]</td>");
                        echo ("<td><a href='https://www.google.com/maps/dir//$row[$c]'>    <img src='../../public/image/maps.png' alt='Gogole Maps' style='max-width:25px;'/></a></td></tr>");
                    }
                }
            ?>
      </tbody>
    </table>

          
      
      
 </div>

</body>
    <?php
    include $root . '/app/view/fragment/fragmentCovidFooter.html';
    ?>
    <!-- ----- fin viewMap -->    

    
    