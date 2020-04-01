/**
 *	from PHP Forms: Exercise 1 ( https://www.w3schools.com/php/exercise.asp?filename=exercise_forms1 )
 *
 *	question:
 *	If the form in the white section below gets submitted, how can you, in welcome.php, output the value from the "first name" field?
 *
 *	--- BEGIN: White Section ---
 *	<form action="welcome.php" method="get">
 *	First name: <input type="text" name="fname">
 *	</form>
 *	--- END: White Section ---
 *
 *	<html>
 *	<body>
 *	Welcome <?php echo ______________; ?>
 *	</body>
 *	</html>
 *
 */
<html>
<body>
Welcome <?php echo $_GET["fname"]; ?>
</body>
</html>