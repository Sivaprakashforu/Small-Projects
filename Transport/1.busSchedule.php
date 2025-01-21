<?php
  //https://github.com/divya2661/Transport-Management-System

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bus Schedule</title>
    <style>
      h1{text-align:center;}
      </style>

  </head>
  
  <body>
  <h1>Bus Schedule</h1>
      <table>
        <thead>
          <tr>
            <th>Bus</th>
            <th>Time</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
        <?php 
          $busSchdule=20;
          $vCapacity =50;
          for ($i=0; $i < count($busSchdule); $i++){

        ?>
          <tr> 
            <td><?php echo ceil($busSchdule[$i]["Nstudent"]/$vCapacity);?>
            </td>
            <td> 
              <?php $str=$busSchdule[$i]["stime"];
                  $t = (10*$str[0]+$str[1]*100-70);
                  echo $t;
              ?>
            </td>
            <td>
              <?php echo $busSchdule[$i]["dt"];
              ?>
            </td>
          </tr>

      
        <?php
        
          }
        ?>
       <tbody>
       </table>
  </body>
</html>
