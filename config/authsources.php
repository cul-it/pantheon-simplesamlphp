<?php

if (defined('PANTHEON_ENVIRONMENT') && !empty($_ENV['PANTHEON_ENVIRONMENT'])) {
    if ($_ENV['PANTHEON_ENVIRONMENT'] == 'live') {
        require 'authsources.php.prod';
    }
    else {
        require 'authsources.php.test';
    }
}
else {
    require 'authsourches.php.default';
}
