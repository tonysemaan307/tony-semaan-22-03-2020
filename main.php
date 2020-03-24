<?php
 $connector = mysql_connect("localhost","tonysema","qizA5D4g84");
 if ($connector->connect_error) {
     die("Connection failed: " . $connector->connect_error);
 }
 else{
   echo "successfully";
 }
 ?>
 <!DOCTYPE html>
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="http://www.tonysemaan.net/index.html/st.css">
 </head>
 <body>
    <!--right-->

    <div id="body">
        <div id="left">
        </div></div>
    <?php
    //execute the SQL query and return records


  mysql_select_db("tonysema_location", $connector);
  $result = mysql_query("SELECT * FROM beacon") or die('Errant query:');
  ?>
    <table>
  <thead>
   <tr>
     <th>UUID</th>
     <th>Major</th>
     <th>Minor</th>
     <th>RSSI</th>
     <th>Proximity</th>
     <th>Name</th>
     <th>Description</th>
   </tr>
  </thead>
  <tbody>
   <?php
   echo "<tr>";
      while($row = mysql_fetch_assoc($result))
      {
           echo
           "
             <td>{$row['UUID']}</td>
             <td>{$row['Major']}</td>
             <td>{$row['Minor']}</td>
             <td>{$row['RSSI']}</td>
             <td>{$row['Proximity']}</td>
             <td>{$row['Name']}</td>
             <td>{$row['Description']}</td>
           ";

       ?>
     </tbody>
   </table>
    <?php  }echo"</tr>";?>

 </body>
 </html>
<?php mysql_close($connector); ?>
