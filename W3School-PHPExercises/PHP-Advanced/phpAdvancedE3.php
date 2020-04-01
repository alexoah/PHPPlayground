/**
 *	from PHP Advanced: Exercise 3 ( https://www.w3schools.com/php/exercise.asp?filename=exercise_advanced3 )
 *
 *	question:
 *	Open a file, and write the correct syntax to output one character at the time, until end-of-file.
 *
 *	$myfile = fopen("webdict.txt", "r");
 *
 *	while(!____($myfile)) {
 *		echo _____($myfile);
 *	}
 *
 */
$myfile = fopen("webdict.txt", "r");

while(!feof($myfile)) {
	echo fgetc($myfile);
}