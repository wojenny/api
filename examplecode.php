/* Sample code of communication with the server API KryptoPayversion 1.0.0 */
/* Przykładowy kod łączności z serwerem API sytemu KryptoPay wersja 1.0.0 */
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


<?php
$username='yournick';
$api_public_key=sha1($username);
$api_private_key='ab672eae321eb5a36064bd25bff614246118a6e4';

$amount='0.02';
$order_nr='D32d3';
$description='Computer';
$company='computershop';
$name='John';
$surname='Tomson';
$address='Warsaw,Soldier34/123';
$url ='https://mystore.com?invoice_id=058921123&status=ok'; 
$url = urlencode($url);

$json_url="https://kryptopay.pl/api/create/?api_public_key=$api_public_key&api_private_key=$api_private_key&amount=$amount&order_nr=$order_nr&description=$description&company=$company&name=$name&surname=$surname&address=$address&url=$url";
$json_data = file_get_contents($json_url);
$json_feed = json_decode($json_data);
$transaction=$json_feed->transaction;

echo "<a href=https://kryptopay.pl/api/payments/?nr_transakcji=".$transaction.">redirect</a>";
?>
