<?php
function ducan($stanje="otvoren"){
echo "Ducan je $stanje";
}
$date = date('Y-m-d');
$dayofweek = date('w', strtotime($date));

$time = date("Hm");

if($dayofweek == 7){
    ducan("zatvoren");
}
else if ($dayofweek == 6){
    if($time >= 900 && $time <= 1400){
        ducan("zatvoren");
    }
    else {
        ducan("otvoren");
    }
}
else if ($dayofweek < 6){
    if($time >= 800 && $time <= 2000){
        ducan("otvoren");
    }
    else{
        ducan("zatvoren");
    }
}
?>