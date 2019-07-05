
<?php

function get_difference($date1,$date2){

  $date11=date_create("2019-03-17");
$date21=date_create("2019-12-12");
$diff=date_diff($date11,$date21);
echo $diff->format("%R%a days");
}


get_difference("2013-03-15","2013-03-16");
?>