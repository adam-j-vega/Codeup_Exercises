<?php
$hungry=False;
$food_available=True;
$have_money = False;

If($food_available == True && $hungry == True){
	echo "We are fed and good to go.\n";
}

If($hungry && ($food_available || $have_money)){
	echo "You will eat.";
	}Else{
		echo "Not hungry but thank you.";
	}
?>