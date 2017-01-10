<?php

  $data = json_decode(file_get_contents('php://input'), true);
  $content = $data['content']['fields'];
  
 /* $fcount = 4;
  $vcount = 2;
  $rccount = 0;*/
  $responsecontent = array();
  $rcontent = array();
  //$j=0;
  $flag = 0;
  for ($i = 0; $i < $fcount and $rccount < 2; $i++) {
    $dname = $content[$flag]['display_name'];
    $valuesarray = $content[$flag]['values'];
    $responsecontent[$rccount][$dname] = $valuesarray[$rccount];
    $flag++;
    if($flag == 3) {
      $i=0;
      //$j++;
      $rccount++;
      $flag = 0;
    }
  }
$rcontent['content'] = $responsecontent;
echo "The response is  ", json_encode($rcontent, JSON_PRETTY_PRINT), "\n\n";
?>