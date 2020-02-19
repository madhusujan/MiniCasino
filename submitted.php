
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Students Survey</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel ='stylesheet' href='monty-hall.css'>

  </head>
  <body>
   	<center>

   		<h2>Thank you for your response <h2>

   		<div class="thanks">
   			<img src="https://i.pinimg.com/originals/ad/21/c7/ad21c783d42af8f855c45245a2ac63ae.png" class="image" >
   		</div>

      <br> <br>

     <div> <a class="btn btn-success" href="monty-hall.php">Play Again</a> 
     <a class="btn btn-danger" href="index.html">Home</a> 
     <a class="btn btn-primary" href="explain.html">Explanation</a> </div>

  <?php
    $count=0;
    mysql_connect("localhost","webuser","d0nkey5");
    mysql_select_db("cs3552019");
        $query = mysql_query("Select * from madhudeal");
         $result = mysqli_query($connect,$query);

         while($row1 = mysql_fetch_assoc($query)){
            $valueOfSwitch = $row1['switch'];
              $valueofResult= $row1['result'];
                if($valueOfSwitch == 'Yes' && $valueofResult == 'Won'){
                    $count++;
                }

                elseif ($valueOfSwitch == 'No' && $valueofResult == 'Won') {
                      $countt++;
                }
        }  


        
        $num_rows = mysql_num_rows($query);
        
        echo "Total games played so far is : " . $num_rows;
        echo "<br> <br>";
        echo "Total games won if people switched is:" . $count ;
        echo "<br> <br>";
        echo "Winning percent if people switched is:" . round(($count/$num_rows)*100, 2) ."%";
        echo "<br> <br>";  
        echo "Total games won if people did not switched is:" . $countt; 
        echo "<br> <br>";
        echo "Winning percent if people did not switched is:" . round(($countt/$num_rows)*100, 2) ."%";  
      
  ?>
   	</center>
  </body>
</html>
