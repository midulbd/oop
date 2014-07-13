<?php
	//Pascal case used for ClassName
	//small letter used for filename

	class OfficeEmployee
	{
		public $id;
		public $name;
		public $salary;

		public function get_salary_with_bonus()
		{
			if($this->salary <= 10000){
				$bonus = $this->salary * 0.5;
				$total_salary = $bonus + $this->salary;

				return $total_salary;
			}
			elseif ($this->salary>10000 && $this->salary<=30000) {
				$bonus = $this->salary * 0.3;
				$total_salary = $bonus + $this->salary;

				return $total_salary;
			}
			elseif ($this->salary>30000) {
				$bonus = $this->salary * 0.2;
				$total_salary = $bonus + $this->salary;

				return $total_salary;
			}
			else{
				return "Invalid salary!";
			}
		}
	}
?>