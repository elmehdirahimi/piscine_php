<?php
	if (file_exists("../private/chat") == TRUE)
	{
		$chat = unserialize(file_get_contents("../private/chat"));
		foreach ($chat as $conv) 
		{
			echo "[";
			echo date("H:i", $conv['time']);
			echo "] ";
			echo "<b>";
			echo $conv['login'];
			echo "</b>: ";
			echo $conv['msg'];
			echo "<br />";
		}
	}
?>
