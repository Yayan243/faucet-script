<?php
$url = "https://api.ip2proxy.com/?format=xml&key=demo&package=PX4&ip=".$ip;
$timeout = 10;
$javascript_loop = 0;
$ch = curl_init();
curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
curl_setopt( $ch, CURLOPT_ENCODING, "" );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );# required for https urls
curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
curl_setopt( $ch, CURLOPT_TIMEOUT, $timeout );
curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
$content = curl_exec( $ch );
$response = curl_getinfo( $ch );
curl_close ( $ch );
?>