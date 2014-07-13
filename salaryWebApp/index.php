<!DOCTYPE html>
<html>
	<head>
		<title>Salary Web App</title>
</head>
<body>
	<form action="index.php" method="POST">
		<table align="center" style="background: lightgrey">
			<tr>
				<td colspan="2">
					<h2 style="background: yellowgreen; text-align:center">Salary Web App</h2>
				</td>
			</tr>
			<tr>
				<td>Employee Name: </td>
				<td><input type="text" name="employeeNameText"></td>
			</tr>
			<tr>
				<td>Basic Amount: </td>
				<td><input type="text" name="basicAmountText"></td>
			</tr>
			<tr>
				<td>House Rent: </td>
				<td><input type="text" name="houseRentRate"> % of Basic</td>
			</tr>
			<tr>
				<td>Medical Allowance: </td>
				<td><input type="text" name="medicalAllowanceRate"> % of Basic</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="showMySalaryButton" value="Show Me Salary"></td>
			</tr>
			<tr>
				<td colspan="2" style="background:white">
					<?php
					require_once 'salary.php';

					if(isset($_POST['showMySalaryButton'])){

						$salaryInfo = new Salary();
						
						$salaryInfo->employee_name = $_POST['employeeNameText'];
						$salaryInfo->basic_amount = $_POST['basicAmountText'];
						$salaryInfo->house_rent_rate = $_POST['houseRentRate'];
						$salaryInfo->medical_allowance_rate = $_POST['medicalAllowanceRate'];

						$total_salary = $salaryInfo->get_total_salary();
						echo "<h4>$salaryInfo->employee_name, your total salary: ".$total_salary." tk</h4>";	
						}
					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>