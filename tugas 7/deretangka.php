<?php
  for($i=1; $i<=10; $i++){
    for($j =1; $j < $i; $j++){
        echo " ";
    }
    for($k = 10; $k >= $i; $k--){
        echo "$k";
    }
    echo "<br>";
  }

  echo "<br>";

  for($i=1; $i<=10; $i++){
    for($j =1; $j < $i; $j++){
        echo "&nbsp;&nbsp";
    }
    for($k = 10; $k >= $i; $k--){
        echo "$k";
    }
    echo "<br>";
  }

  echo "<br>";

  for($i=1; $i<=10; $i++){
    for($j=1; $j<=$i; $j++){
        echo "$j";
    }
    echo "<br>";
  }

  echo "<br>";

  for($i=10; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo " ";
    }
    for($k=1; $k<=$i; $k++){
        echo "$k";
    }
    echo "<br>";
  }
?>