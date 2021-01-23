<?php
  $arr = array(1,3,8,2,5,7,4,0);

  print("Sebelum Di Sorting :<br>");
  print_r($arr);


  print("<br> Setelah Disorting (Buble Sort) :<br>");
  bubble_sort($arr);

  function bubble_sort($arr) {
    for ($i=1; $i < count($arr); $i++) {
      for ($j=count($arr)-1; $j >= $i ; $j--) {
        if($arr[$j-1]>$arr[$j]){
          $temp = $arr[$j-1];
          $arr[$j-1]=$arr[$j];
          $arr[$j]=$temp;
        }
      }
    }
    print_r($arr);
  }
?>
