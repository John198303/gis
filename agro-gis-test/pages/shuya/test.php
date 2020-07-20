<?php
error_reporting(E_ALL);
require_once '../../inc/connect.php';
$sql =  "SELECT  id, date_operations, operations, main, trailer, driver, done FROM `operations-r7-8` ORDER BY date_operations DESC LIMIT 20";
$result = $db1-> query($sql);

?>
<html>  
 <head>  
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	  
	<link rel="stylesheet" href="../../css/table.css" />
	<link rel="stylesheet" href="../../css/field.css" />	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="../../scripts/jquery.tabledit.min.js"></script>
    </head>  
    <body>  
  <div class="table_div">  
   <br />  
   <br />  
   <br />  
    <div class="table-responsive">  
    	<table id="editable_table" class="operation_table">
     <thead>
      <tr>
       <th>ID</th>
       <th>Время</th>
       <th>Операция</th>
    	<th>Основные</th>
    	<th>Прицепные</th>
    	<th>Исполнитель</th>
    	<th>Га</th>
      </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      
      echo "<tr><td>" . $row["id"] ."</td><td>" . $row["date_operations"] . "</td><td>" . $row["operations"] . "</td><td>" . $row["main"] . "</td><td>" . $row["trailer"] . "</td><td>" . $row["driver"] . "</td><td>" . $row["done"] .  '</td></tr>';
     }
     ?>
     </tbody>
    </table>
   </div>  
  </div>  
 </body>  
</html>  
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'../../funcs/action.php',
      columns:{
       identifier:[0, "id"],
       
       editable: [[1, 'date_operations'], [2, 'operations'], [3, 'main'], [4, 'trailer', '{"1": "Прицеп - борона пружинная", "2": "Прицеп - Рюмка Амазон", "3": "Прицеп - сеялка Амазон 6-М"}'], [5, 'driver'], [6, 'done']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>
