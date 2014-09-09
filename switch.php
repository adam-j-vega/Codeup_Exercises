<?php
//example to follow
// switch(gettype($value)) {
//     case 'string':
//         echo '$value is a string';
//         break;
//     default:
//         echo '$value is not a string';
//         break;

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $day_of_week = date('N');

 //echo "{$day_of_week}";

 switch($day_of_week) 
 {
    case 1: 
    	echo date('N');
    	break;
        // Output Monday
    case 2:
    	$day_of_week= date ('N',strtotime("+ 1 day"));
    	echo date('N');
    	break;
    case 3:
    	$day_of_week++;
    	break;
    case 4:
    	break;
    case 5:
    	break;
    case 6:
    	break;
    case 7:
    	break;
}


//===============prior iteration==============
// if($day_of_week==1){
// 	echo date('N');
// 	$day_of_week++;
// }elseif($day_of_week==2){
// 	echo date('N');
// 	$day_of_week++;
// }


?>