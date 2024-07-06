<?php

namespace Inilim\String\Method;

/**
 * new parse_url
 * @return array{protocol:null|string,domain:null|string,port:null|int,login:null|string,password:null|string,path:null|string,query:null|string,anchor:null|string}
 */
function parseURL(string $url): array
{
    $r = \parse_url($url);
    if (!\is_array($r)) $r = [];

    $r['protocol'] = $r['scheme'] ?? null;
    $r['domain']   = $r['host'] ?? null;
    $r['anchor']   = $r['fragment'] ?? null;
    $r['login']    = $r['user'] ?? null;
    $r['password'] = $r['pass'] ?? null;

    unset(
        $r['host'],
        $r['scheme'],
        $r['fragment'],
        $r['user'],
        $r['pass']
    );

    $r['port'] ??= null;
    $r['path'] ??= null;
    $r['query'] ??= null;

    return $r;
}

    // scheme > protocol - например, http
    // host > domain
    // port
    // user
    // pass
    // path
    // query - после знака вопроса ?
    // fragment - после знака решётки #
