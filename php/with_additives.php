<?php
/* Przykładowy kod łączności z serwerem API systemu KryptoPay wersja 1.0.0 */
/*
Mandatory:
api_public_key (string - a-z A-Z 1-9) 
api_private_key (string - a-z A-Z 1-9)
amount (float)
Additional:
order_nr (string - a-z A-Z 1-9)
description (string - a-z A-Z 1-9 ',')
company (string - a-z A-Z 1-9)
name (string - a-z A-Z)
surname (string - a-z A-Z)
address (string - a-z A-Z 1-9 ',')
url (string url)
*/
/*
$amount='2';
$currency='USD';
$json_url='http://rate-exchange.appspot.com/currency?from='.$currency.'&to=PLN';
$json_data = file_get_contents($json_url);
$json_feed = json_decode($json_data);
$price=$json_feed->rate;
$amount=round(($price*$amount),2);
*/
$amount='1.25';
$nazwa='testowy';
$api_public_key=sha1($nazwa);
$api_private_key='xxxxxxxxxxxxxxxxxxxxxxxxxxx';
$order_nr='D32d3';
$description='Computer';
$company='computershop';
$name='John';
$surname='Tomson';
$address='Warsaw,Soldier34/123';
$url ='https://mystore.com?invoice_id=999999&status=ok'; 
$url = urlencode($url);
$url_fail ='https://mystore.com?invoice_id=999999&status=fail'; 
$url_fail = urlencode($url_fail);
$json_url="https://kryptopay.pl/api/create/?api_public_key=$api_public_key&api_private_key=$api_private_key&amount=$amount&order_nr=$order_nr&description=$description&company=$company&name=$name&surname=$surname&address=$address&url=$url&url_fail=$url_fail";
$json_data = file_get_contents($json_url);
$json_feed = json_decode($json_data);
$transaction=$json_feed->transaction;
$adres='https://kryptopay.pl/api/payments/?transaction='.$transaction;
header("Location: ".$adres);
?>
