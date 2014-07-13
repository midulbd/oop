<?php

	class InterestCalculator
	{
		public $principal_amount;
		public $annual_interest_rate;
		public $time_period;

		public function get_total_amount()
		{
			//Equation to calculate interest
			$interest = ($this->annual_interest_rate * $this->principal_amount * $this->time_period)/100;

			return $interest+$this->principal_amount;
		}
	}
?>