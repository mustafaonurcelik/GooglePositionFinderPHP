<?php

require_once 'GooglePositionFinder.class.php';

$google = new GooglePositionFinder();

$page = 1;
$lang = 'com.tr'; // turkish
$data = $google->query('jquery dersleri', $page, $lang);

print_r($data);

$match = $google->matchResult('erbilen.net');
echo 'Aramalarda '.$match.' sonuçta siteniz yer alıyor.';
