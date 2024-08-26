<?php

require_once __DIR__ . '/vendor/autoload.php';

use Inilim\Dump\Dump;

Dump::init();

de(
    str_replace('__SEPARATOR__', '|', \preg_quote(\_data()->URLProtocolsAsString('__SEPARATOR__')))
);
$a = _str()->startsWithUrlBeforePath('https://www.youtube.');
dde($a);
