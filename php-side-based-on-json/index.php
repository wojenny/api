<?php 
session_start(); 
//CONFIG
$amount='1.25';
$currency='pln';
$api_public_key='8eea5991ca8a2b0e374a28aa41db2fe720b0a205';
$api_private_key='1ac1044343584d951538ec305a3bb77e52d404f09036a6879db538971501867d';
$url ='https://mystore.com?invoice_id=999999&status=ok'; 
$url_fail ='https://mystore.com?invoice_id=999999&status=fail'; 
//CONFIG END
?>

<?php
//CREATE AND SHOW TRANSACTION:
include 'kryptopay_library/main.php';
?>
