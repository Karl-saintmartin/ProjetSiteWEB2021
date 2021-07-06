
<!-- ----- début viewGraphe -->
<?php
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCovidMenu.html';
    include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
    ?>
      
<div id="divGraph">          
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
  
var xValues = [
    <?php
        while ($row = $results2->fetch())
        {
            for ($counter = 0; $counter < $results2->columnCount(); $counter +=2) 
            {
                echo ('"');
                echo ("$row[$counter]");
                echo ('"');
                echo (", ");
            }
        }
        $results2 = 0;
    ?>
        ];
        
        
var yValues = [
    
   
           <?php
          
       
     
        while ($row = $results3->fetch())
        {
      
            for ($counter2 = 1; $counter2 < $results3->columnCount(); $counter2 +=2) 
            {
             
           
             
              
                
                echo ("$row[$counter2]");
                echo (", ");
                
            
            }
           
            }
            $results3 = 0;
            ?>
];
var barColors = [
        <?php
        while ($row = $results4->fetch())
        {
            for ($counter3 = 0; $counter3 < $results4->columnCount(); $counter3 +=2) 
            {
               
                echo("'#'+(Math.random()*0xFFFFFF<<0).toString(16)");
                echo (", ");
            }
        }
        $results4 = 0;
    ?>
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Quantité de vaccin en fonction du centre choisi "
    }
  }
});

</script>

</div>
      
 </div>

</body>
    <?php
    include $root . '/app/view/fragment/fragmentCovidFooter.html';
    ?>
    <!-- ----- fin viewGraphe -->    

    
    