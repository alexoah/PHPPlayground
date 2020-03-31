/**
 *	from PHP Arrays: Exercise 4 ( https://www.w3schools.com/php/exercise.asp?filename=exercise_arrays4 )
 *
 *	question:
 *	Here you see an associative array. Output "age" of Ben.
 *
 *	$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
 *	echo "Ben is " . ___________ . " years old.";
 *
 */
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Ben is " . $age['Ben'] . " years old."; // $age["Ben"] is correct too.