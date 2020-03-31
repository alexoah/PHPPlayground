/**
 *	from PHP If...Else: Exercise 4 ( https://www.w3schools.com/php/exercise.asp?filename=exercise_ifelse4 )
 *
 *	question:
 *	Print "1" if a is equal to b, print "2" if a is greater than b, otherwise print "3".
 *	Output "1" if $a is equal to $b, print "2" if $a is greater than $b, otherwise output "No".
 *
 *	$a = 50;
 *	$b = 10;
 *	__ ($a == $b) {
 *		echo "1";
 *	} ______ ($a > $b) {
 *		echo "2";
 *	} ____ {
 *		echo "3";
 *	}
 *
 */
$a = 50;
$b = 10;
if ($a == $b) {
	echo "1";
} elseif ($a > $b) {
	echo "2";
} else {
	echo "3";
}