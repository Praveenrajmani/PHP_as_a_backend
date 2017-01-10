<?php

  $data = json_decode(file_get_contents('php://input'), true);
  $content = $data['content']['fields'];
  $contentcount = count($content);
  $tval = count($content[0]['values']);

 /* $fcount = 4;
  $vcount = 2;
  $rccount = 0;*/
  $rccount = 0;
  $responsecontent = array();
  $rcontent = array();
  //$j=0;
  $flag = 0;
  for ($i = 0;$rccount < $tval; $i++) {
    $dname = $content[$flag]['display_name'];
    $valuesarray = $content[$flag]['values'];
    $responsecontent[$rccount][$dname] = $valuesarray[$rccount];
    $flag++;
    if($flag == $contentcount) {
      $i=0;
      //$j++;
      $rccount++;
      $flag = 0;
    }
  }
$rcontent['content'] = $responsecontent;
echo json_encode($rcontent, JSON_PRETTY_PRINT);
?>