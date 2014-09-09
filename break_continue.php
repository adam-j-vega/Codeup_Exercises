<?php
//    Create a for loop that shows all even numbers between 1 and 100 using continue.

//    Create another for loop that counts from 1 to 100, but stops after 10 using break.

//===============prior iteration==================
// for( $num=2 ; $num<=100 ; $num+=2 ){
// 	echo "{$num} \n";
// 	continue;
// }
//===============final iteration==================
for($num=1 ; $num<=100 ; ++$num)
{
	echo "{$num} \n";
		if($num==10)
		{
		break;
	}
}
?>