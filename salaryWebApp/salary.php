<?php

	class Salary
	{
		public $employee_name;
		public $basic_amount;
		public $house_rent_rate;
		public $medical_allowance_rate;

		public function get_total_salary()
		{
			$rent = $this->basic_amount * ($this->house_rent_rate/100);
			$medical = $this->basic_amount * ($this->medical_allowance_rate/100);

			$total_salary = $this->basic_amount + ($rent+$medical);

			return $total_salary;
		}
	}
?>