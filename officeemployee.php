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
			if($this->salary<=10000){
				return $this->salary+=$this->salary*0.5;
			}
			elseif ($this->salary>10000 && $salary<=30000) {
				return $this->salary+=$this->salary*0.3;
			}
			elseif ($this->salary>30000) {
				return $this->salary+=$this->salary*0.2;
			}
			else{
				return "Invalid salary!";
			}
		}
	}
?>