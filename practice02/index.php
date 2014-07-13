<!DOCTYPE html>
<html>
	<head>
		<title>Simple Interest Calculator UI</title>
</head>
<body>
	<form action="index.php" method="GET">
		<label>Principal Amount</label>
		<input type="text" name="principalAmountText"><br/>

		<label>Annual Interst Rate</label>
		<input type="text" name="annualInterestRateText"> %<br/>

		<label>Time Period</label>
		<input type="text" name="timePeriodText"> year<br/>

		<input type="submit" name="calculateButton" value="Calculate">
	</form>
	<?php
		require_once 'interestcalculator.php';
		if(isset($_GET['calculateButton'])){

			$interest = new InterestCalculator();
			
			$interest->principal_amount = $_GET['principalAmountText'];
			$interest->annual_interest_rate = $_GET['annualInterestRateText'];
			$interest->time_period = $_GET['timePeriodText'];

			$Result = $interest->get_total_amount();
			echo "<br/>";
			echo "Result: ".$Result;	
		}

	?>
</body>
</html>