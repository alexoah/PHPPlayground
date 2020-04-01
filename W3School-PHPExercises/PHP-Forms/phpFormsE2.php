/**
 *	from PHP Forms: Exercise 2 ( https://www.w3schools.com/php/exercise.asp?filename=exercise_forms2 )
 *
 *	question:
 *	If the form in the white section below gets submitted, how can you, in welcome.php, output the value from the "first name" field?
 *	Hint: The http method is not the same as in Exercise 1.
 *
 *	--- BEGIN: White Section ---
 *	<form action="welcome.php" method="post">
 *	First name: <input type="text" name="fname">
 *	</form>
 *	--- END: White Section ---
 *
 *	<html>
 *	<body>
 *	Welcome <?php echo _______________; ?>
 *	</body>
 *	</html>
 *
 */
<html>
<body>
Welcome <?php echo $_POST["fname"]; ?>
</body>
</html>