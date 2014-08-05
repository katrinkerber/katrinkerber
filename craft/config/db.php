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
		'database' => 'katrinke_craft',
		'server' => 'localhost',
		'user' => 'katrinke_katrin',
		'password' => 'kb1#%m1Gtgit'
	),

	'dev.katrinkerber.com' => array(
		'database' => 'craft_katrinkerber',
		'server' => 'localhost',
		'user' => 'root',
		'password' => 'root'
	)

);
