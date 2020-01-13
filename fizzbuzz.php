#!/usr/bin/php
<?php

for ( $i=0; $i <=100; $i++ )

{
	
	  if (!( $i % 15)) echo "FizzBuzz\n";
	  else if (!( $i % 5)) echo "Buzz\n";
	  else if (!( $i % 3))  echo "Fizz\n";
	  else echo "$i\n"		; 
		
}

?>

