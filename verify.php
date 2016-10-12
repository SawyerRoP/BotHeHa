<?php
$access_token = 'UBiM3HYXHiyEgFEZqWwsTYy2eiU2pOGWpbVqdPtLR4B7o0Inm8OAKahx46Pu8yumqXPDYq3LOlaLfEJ8k5WAQMS8nX7oyH0ZGixTg6GWxo/LPbnJvcISI0dG/n5BjTm5DEVFg7mojbRrf9hw7QP2NgdB04t89/1O/w1cDnyilFU=';
$proxy = 'velodrome.usefixie.com:80';
$proxyauth = 'fixie:XuvAyM4AEXQ4PA6';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
