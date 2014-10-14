<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

    '*' => array(
      'errorTemplatePrefix' => "pages/",
    ),
    // local
    '.dev' => array(
      'devMode' => true,
      'userSessionDuration' => false,
      'siteUrl' => 'http://katrinkerber.dev',
    ),
    // live
    '.com' => array(
      'siteUrl' => 'http://katrinkerber.com',
    ),
);
