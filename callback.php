<?php
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<?php
/*
*   Offcampus Dynamic Message
*
*/

ob_start();
?>
<Response>
 <Pause length="1"/>
    <Say>Hey <?php echo $_GET[name];?> Thank you for using The Last Call and Designated Dawgs. You have been added to the queue and should be hearing from your driver soon. If you would like to view your number in the queue please visit lastcall dot my N M I dot net and select designated dawgs.</Say>
    <Sms>Hey <?php echo $_GET[name];?> Thank you for using The Last Call and Designated Dawgs. You should be hearing from your driver soon.</Sms>
</Response>
<?php
$offcampus = ob_get_clean();


/*
*   Downtown Dynamic Message
*
*/
ob_start();
?>
<Response>
 <Pause length="1"/>
    <Say>Hey <?php echo $_GET[name];?> Thank you for using The Last Call and Designated Dawgs. You have been added to the queue and should head to the Designated Dawg Downtown pickup location now. It is located next the the Wells Fargo on College Avenue. If you would like to view your number in the queue please visit lastcall dot my N M I dot net and select designated dawgs.</Say>
    <Sms>Hey <?php echo $_GET[name];?> Thank you for using The Last Call and Designated Dawgs. Please head to the pickup location next to Wells Fargo ATM on College Avenue</Sms>
</Response>
<?php
$downtown = ob_get_clean();
?>
<?php
if($_GET[pickuplocation]=="downtown"){
	echo $downtown;
}
	?>
<?php if($_GET[pickuplocation]!="downtown"){
echo $offcampus;
}
?>