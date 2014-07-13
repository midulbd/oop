<!DOCTYPE html>
<html>
	<head>
		<title>User Input Form</title>
</head>
<body>
	<form action="index.php" method="GET">
		<input type="text" name="idText"><br/>
		<input type="text" name="nameText"><br/>
		<input type="text" name="salaryText"><br/>
		<input type="submit" name="submitButton" value="Submit">
	</form>
	<?php
		require_once 'officeemployee.php';
		if(isset($_GET['submitButton'])){

			$an_employee = new OfficeEmployee();

			$an_employee->id = $_GET['idText']; //$_POST or $_GET has the value in dictionary(Key-value pair) format
			$an_employee->name = $_GET['nameText'];
			$an_employee->salary = $_GET['salaryText'];
			$salary_with_bonus = $an_employee->get_salary_with_bonus();

			echo $an_employee->id.' '.$an_employee->name.' '.$an_employee->salary;
			echo "<br/>";
			echo "Salary with bonus: ".$salary_with_bonus;	
		}

	?>
</body>
</html>