<?php

$row = 1;
$handle=fopen("C:\Users\Public\sample.csv", "r");
//or a url/relative link for files hosted on site.
if ($handle) {
  echo '<table border="3">';
  while ($data = fgetcsv($handle, 1000, ";")) {
    $num = count($data);
    echo '<tr>';
    for ($i=0; $i < $num; $i++) {
      $value = $data[$i]; 
      echo '<td>'.$value.'</td>';
      }
    }  
  echo '</tbody></table>';
  fclose($handle);
}

?>


<style>
  tr:first-child  {
  font-weight: bold;
  }

  h1: {
    margin-bottom: 15px;
  }
</style>