<?php
if (isset($_COOKIE['name']))
{
	$last = $_COOKIE['name'];
	echo "welcome back!<BT> your name is " .$last;
}
else
{
	echo "welcome to our site!";
}
?>
