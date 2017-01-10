<?php
// print_r($_POST);
// if( $_POST )

  $data = json_decode(file_get_contents('php://input'), true);
  //var_dump($data);
  $custname = $data['custname'];
  $custage = $data['age'];

  
  
  echo "<br>".$custname."<br>".$custage;

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

?>