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
			return $this->salary + 5000;
		}
	}
?>