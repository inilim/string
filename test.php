<?php

require_once __DIR__ . '/vendor/autoload.php';

use Inilim\Dump\Dump;

Dump::init();

$a = _str()->startsWithUrlBeforePath('https://www.youtube.');
dde($a);