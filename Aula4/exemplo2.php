<?php

	$t = serialize(array('Rafael' => 'oliveira'));
	echo $t . "\n";

	var_dump(unserialize($t));