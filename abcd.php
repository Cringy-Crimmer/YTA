
 <?php
  try {
  $con= new PDO('mysql:host="Cringy0Crimmer.mysql.eu.pythonanywhere-services.com";dbname="Cringy0Crimmer$Youtubers", "Cringy0Crimmer", "HeyasBuddyHowYaDoinToday");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM contact";
  //first pass just gets the column names
  print "<table> n";
  $result = $con->query($query);
  //return only the first row (we only need field names)
  $row = $result->fetch(PDO::FETCH_ASSOC);
  print " <tr> n";
  foreach ($row as $field => $value){
   print " <th>$field</th> n";
  } // end foreach
  print " </tr> n";
  //second query gets the data
  $data = $con->query($query);
  $data->setFetchMode(PDO::FETCH_ASSOC);
  foreach($data as $row){
   print " <tr> n";
   foreach ($row as $name=>$value){
   print " <td>$value</td> n";
   } // end field loop
   print " </tr> n";
  } // end record loop
  print "</table> n";
  } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
  } // end try
 ?>