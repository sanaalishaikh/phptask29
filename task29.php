<?php
// Task29
date_default_timezone_set ("Asia/Karachi");
$c_time = date ("H:i:s");
echo $c_time;
echo "<br>";
// Display good morning, Goof afternoon, Good Evening or good night according to the time
// Multiway decision
$t = date("H");

if ($t < "12") {
  echo "Good Morning!";
} 
else if($t< "4"){
    echo "Good Aftrenoon";
}
else if($t > "4"){
    echo "Good Evening";
}

else {
  echo "Good Night";
}
?>