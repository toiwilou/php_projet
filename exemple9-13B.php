<?php
trait marcher
{
	public $pattes;
	function marcher()
	{
		echo "Je marche sur ".$this->pattes."pattes<br />";
	}
}

trait nager
{
	function nager()
	{
		echo "Moi je sais nager()<br />";
	}
}
trait amphibie
{
	
	use marcher, nager;
}
class grenouille
{
	use amphibie;
}

?>


