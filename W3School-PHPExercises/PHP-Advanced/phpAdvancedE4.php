/**
 *	from PHP Advanced: Exercise 4 ( https://www.w3schools.com/php/exercise.asp?filename=exercise_advanced4 )
 *
 *	question:
 *	Create a cookie named "username".
 *
 *	_________("username", "John", time() + (86400 * 30), "/");
 *
 */
setcookie("username", "John", time() + (86400 * 30), "/");