/**
 *	from PHP Loops: Exercise 2 ( https://www.w3schools.com/php/exercise.asp?filename=exercise_loops2 )
 *
 *	question:
 *	Output $i as long as $i is less than 6.
 *
 *	$i = 1; 
 *
 *	__ {
 *		echo $i;
 *		$i++;
 *	} _____ ($i < 6);
 *
 */
$i = 1; 

do {
	echo $i;
	$i++;
} while ($i < 6);