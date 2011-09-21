Ninjas
======
A Micro PHP Framework
---------------------

A really simple micro PHP framework I started building, mostly because I wanted something that had zero overhead.

Implementation is simple:

	<?php

	include('../ninjas/Ninjas.php');	
	$n = new Ninjas();

	$n->wind->connect();
	if($n->wind->getConnected()):
		$query = "SELECT * FROM AWESOME";
		$result = mysql_query($query);	
		$n->wind->disconnect();
	endif;

	?>

I think I mostly made this so I could make all the ninja class name references.

Charlie Gleason
<hi@charliegleason.com>