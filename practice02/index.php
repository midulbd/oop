<!DOCTYPE html>
<html>
	<head>
		<title>Simple Interest Calculator UI</title>
</head>
<body>
	<form action="index.php" method="GET">
		<table align="center" style="background: lightgrey">
			<tr>
				<td colspan="2">
					<h2 style="background: yellowgreen; text-align:center">Simple Interest Calculator</h2>
				</td>
			</tr>
			<tr>
				<td>Principal Amount</td>
				<td><input type="text" name="principalAmountText"></td>
			</tr>
			<tr>
				<td>Annual Interst Rate</td>
				<td><input type="text" name="annualInterestRateText"> %</td>
			</tr>
			<tr>
				<td>Time Period</td>
				<td><input type="text" name="timePeriodText"> year</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="calculateButton" value="Calculate" width="100"></td>
			</tr>
			<tr>
				<td colspan="2" style="background:white">
					<?php
					require_once 'interestcalculator.php';
					if(isset($_GET['calculateButton'])){

						$interest = new InterestCalculator();
						
						$interest->principal_amount = $_GET['principalAmountText'];
						$interest->annual_interest_rate = $_GET['annualInterestRateText'];
						$interest->time_period = $_GET['timePeriodText'];

						$Result = $interest->get_total_amount();
						echo "<h2> Result: ".$Result."</h2>";	
						}

					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>