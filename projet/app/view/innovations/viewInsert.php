
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCovidMenu.html';
      include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
    ?> 

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='patientsCreated'>        
        <label for="id">nom : </label><input type="text" name='nom' size='75' value='Jean'>       
        <br/>
         <label for="id">prenom : </label><input type="text" name='prenom' size='75' value='Michelle'>       
        <br/>
        <label for="id">adresse : </label><input type="text" name='adresse' size='80' value='28 rue du bon parleur, 10000 Troyes'>   
              
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

<!-- ----- fin viewInsert -->



