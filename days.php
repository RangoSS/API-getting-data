<?php


$days_of_the_week = array(0,3,2,1,4,6,4,2,1,2,3,4,1,2,3,5,6,3,1);
rsort($days_of_the_week);

foreach ($days_of_the_week as $key => $value) {
	
	 if ($value==0){
	 	  echo " ". "monday" ." ";
	 }

if ($value==6){
	 	  echo" ". "sunday" ." " ;
	 }
	
  	echo $value." ";

      
}


?>