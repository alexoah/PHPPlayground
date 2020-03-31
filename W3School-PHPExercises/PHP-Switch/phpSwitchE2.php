/**
 *	from PHP Switch: Exercise 2 ( https://www.w3schools.com/php/exercise.asp?filename=exercise_switch2 )
 *
 *	question:
 *	Add a section that will output "Neither" if $color is neither "red" nor "green".
 *	
 *	switch ($color) {
 *		case "red":
 *			echo "Hello";
 *			break;
 *		case "green":
 *			echo "Welcome";
 *			break;
 *		_______:
 *			echo "Neither";
 *	}
 *
 */
switch ($color) {
	case "red":
		echo "Hello";
		break;
	case "green":
		echo "Welcome";
		break;
	default:
		echo "Neither";
}