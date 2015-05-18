<div style="width: 270px; height: 350px; text-align: center;" >
<?php
$url = urlencode($url);
$url_fail = urlencode($url_fail);
$json_url="https://kryptopay.pl/api/json/create/?api_public_key=$api_public_key&api_private_key=$api_private_key&amount=$amount&url=$url&url_fail=$url_fail&currency=$currency";
$json_data = file_get_contents($json_url);
$json_feed = json_decode($json_data);
$transaction=$json_feed->transaction;
$adress=$json_feed->address;
$amount_btc=$json_feed->amount_btc;
$amount_currency=$json_feed->amount;
$zmiennaadresowa="bitcoin:".$adress."?amount=".$amount_btc;
$qrcod="https://chart.googleapis.com/chart?cht=qr&chs=250x250&chld=L|0&chl=$zmiennaadresowa";
$_SESSION['kryptopay_payment_system']=$transaction;
?>


		<script src="kryptopay_library/jquery-latest.js"></script>
		<script type="text/javascript">
		setInterval("refresh();",1000); 
	    function refresh(){
		var sesja = '<?php echo $_SESSION['kryptopay_payment_system']; ?>';
        $('#refresh').load("kryptopay_library/refresh.php?transaction=" + sesja); 
		}
		</script>



<?php
echo '<font size="2"><b>Scan QR or click on it to pay your order</b></font></br>';
echo '<a href="'.$zmiennaadresowa.'"> <img src='.$qrcod.' /></a></br>';
echo '</br><font size="4">Send exactly: <b>'.$amount_btc.' BTC</font></b></br><font size="2"><b><a href="'.$zmiennaadresowa.'">'.$adres_pobrany_btc.'</a></b></font>';
 ?>

<div id="refresh">
</div>
</div>
