<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
	'*' => array(
		'tablePrefix' => 'craft',
	),

	'katrinkerber.com' => array(
		'database' => 'katrinke_2016',
		'server' => 'localhost',
		'user' => 'katrinke_katrin',
		'password' => 'kb1#%m1Gtgit'
	),

	'katrinkerber.dev' => array(
		'database' => 'katrinke_2016',
		'server' => '91.197.231.206',
		'user' => 'katrinke_katrin',
		'password' => 'kb1#%m1Gtgit'
	)
);
