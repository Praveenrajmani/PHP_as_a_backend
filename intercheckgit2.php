<?php
// print_r($_POST);
// if( $_POST )

  $data = json_decode(file_get_contents('php://input'), true);
  //echo "hi";
  //var_dump($data);
  $content = $data['content']['fields'];
  //print_r($content);
  //$custage = $data['age'];
  $fcount = 2;
  $vcount = 2;
  $rccount = 0;
  $responsecontent = array();
  //echo "hi";
  for ($i = 0; $i < $fcount; $i++) {
    //echo "coming here";
    $j = 0;
    $dname = $content[$i]['display_name'];
    //echo $dname;
    $valuesarray = $content[$i]['values'];
    $responsecontent[$rccount]['FIRST_NAME'] = $dname;
    //$responsecontent[$rccount]
    //for($j=0;$j<vcount;$j++)
    $responsecontent[$rccount]['USER_ID'] = $valuesarray[$j++];
    $responsecontent[$rccount]['DEALER_ID'] = $valuesarray[$j];
    $rccount++;
    
  }

echo "The response is  ", json_encode($responsecontent, JSON_PRETTY_PRINT), "\n\n";

  
  /*echo "<br>".$custname."<br>".$custage;

  $con = mysqli_connect("localhost","root","teddytyson");

  if (!$con)
  {
    die('Could not connect: ' . mysqli_error());
  }
  else
  {
    echo "connected";
  }

  mysqli_select_db($con,"customerdb") or die(mysql_error());

  $query = "INSERT INTO customerdb.customer(cust_name, age) VALUES ('".$custname."', '".$custage."')";
  
  mysqli_query($con,$query) or die(mysql_error());

  mysqli_close($con) or die(mysql_error());
*/
?>