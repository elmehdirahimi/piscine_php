<?php
class Tyrion
{
	public function sleepWith($person)
	{

		if ($person instanceof Jaime)
			print("Not event if Injjjj'm drunk !" .PHP_EOL);

		if ($person instanceof Lannister)
			print("Not event if I'm drunk !" .PHP_EOL);
		else if ($person instanceof Sansa)
			print("Let's do this." .PHP_EOL);
	}	
}
?>
