<?php
	if (empty($_SERVER['REMOTE_ADDR']))
		exit('<h3>Error: no remote address</h3>');

	$ip=$_SERVER['REMOTE_ADDR'];

	echo '<p>IP address is '.$ip.'</p>';

	echo '<pre>';

	passthru('sudo -n iptables -nL || echo sudo failure $?');

	
