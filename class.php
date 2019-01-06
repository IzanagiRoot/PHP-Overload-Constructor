<?php
/**
 * 
 */
class OverClass
{
	
	function __construct()
	{
		$argument = func_get_args();
		$nb_argument = func_num_args();
		switch ($nb_argument) {
			case '0':
				$this->default__construct();
				break;
			case '1':
				$this->first_overload_construct($argument[0]);
				break;
			case '2':
				$this->second_overload_construct($argument[0],$argument[1]);
				break;
			
			default:
				echo "Seriously?? Nooo you're kidding";
				break;
		}
	}

	public function default__construct()
	{
		echo "I am the default construct. I can be common to everybody.";
	}

	public function first_overload_construct($a)
	{
		echo "I am the ".$a." construct";
	}

	public function second_overload_construct($a,$b)
	{
		echo "I am the ".$a." construct and i like pi: ".$b;
	}
}
?>