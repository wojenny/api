<?php
$transaction=$_GET['transaction'];
$json_url="https://kryptopay.pl/api/json/transaction/?transaction=$transaction";
$json_data = file_get_contents($json_url);
$json_feed = json_decode($json_data);
$state=$json_feed->condition;
$start_time=$json_feed->start_time;
if($state=='true')
{
$url=$json_feed->url;
$url=urldecode($url);
echo '<p><a href='.$url.'><font color="green"><b>Transaction accepted</b></font></a></p>';
}
else
{
$time_end=(time()-480);
if($start_time>$time_end)
{
$procent=((($start_time-$time_end)/480)*100);
$procent=(round($procent,1));
echo 'Waiting for transactions ...';
echo '</br><progress style="background-color: #003153;border: 0;height: 9px;border-radius: 9px;width: 250px;margin-top: 4px;" value='.$procent.' max="100" align="left"></progress>';
}
else
{
echo 'Time end, don`t send bitcoin. Refresh your order.';
}
}

?>
