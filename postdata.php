<?php require_once("config.php"); ?>
<?php require_once("functions.php"); ?>
<?php echo lc_header('The Last Call - Designated Dawgs');//include("header.php"); ?>
<?php $parent_menu = 2;?>
      
            
                            
            <div data-role="content" style="padding: 15px">
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-role="list-divider" role="heading">
                        <?php  	
						if(isset($_POST[phone])){
							
						
						
							global $connection;

$sql="INSERT INTO ".DB_NAME.".waiting (fname, lname, compass, pickuplocation, pickedup, destination, cell)
VALUES
('$_POST[fname]','$_POST[lname]','$_POST[compass]', '$_POST[pickuplocation]', '0', '$_POST[address]', '$_POST[phone]' )";


if (!mysql_query($sql,$connection))
  {
  die('Error: ' . mysql_error());
  }
echo "<center>Successfully Added to Queue</center>";
?>
 
                    </li>
                    <li data-theme="c">
                       
                         <?php if($_POST[pickuplocation]=="downtown"){
							 
							  
			   $useragent = $_SERVER['HTTP_USER_AGENT'];
			   $ios6i4 = "Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25";
			   $ios6i5 = "Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A405 Safari/8536.25";
			   $ios6i3gs = "Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A403 Safari/8536.25";

if($useragent == $ios6i4 || $useragent == $ios6i5 || $useragent == $ios6i3gs){
echo "<a href='https://maps.apple.com/maps?q=220+College+Avenue,+Athens,+GA&ie=UTF-8&hq=&hnear=0x88f66cd9311382af:0x52a1e3fed78c20e6,220+College+Ave,+Athens,+GA+30601&gl=us&ei=QmiAUJ_pM4_89gSY94HoCQ&ved=0CCAQ8gEwAA' data-transition='slide'>Go to Pickup Location</a>";}
else {
echo "<a href='https://maps.google.com/maps?q=220+College+Avenue,+Athens,+GA&ie=UTF-8&hq=&hnear=0x88f66cd9311382af:0x52a1e3fed78c20e6,220+College+Ave,+Athens,+GA+30601&gl=us&ei=QmiAUJ_pM4_89gSY94HoCQ&ved=0CCAQ8gEwAA' data-transition='slide'>Go to Pickup Location</a>";
	}
}
 ?>             
 
 <?php if($_POST[pickuplocation]!="downtown"){
							 
							  
			 echo "<center>A driver will be calling<br/>when they are close</center>";


}


 ?>             
           
                    </li>
                </ul>

                <?php if($_POST[pickuplocation]=="downtown"){
					echo waiting_downtown() ;
echo "<center><img src='img/billofrights.png' width='100%'></center>";
 }
 
 ?>             
 
  <?php if($_POST[pickuplocation]!="downtown"){
 
												echo waiting_offcampus() ;

echo "<center>Below is the location we are sending a driver to</center><br><img id='map' src='https://maps.googleapis.com/maps/api/staticmap?center=".$_POST[pickuplocation]."&amp;zoom=17&amp;size=288x200&amp;markers=".$_POST[pickuplocation]."&amp;sensor=false' width='288' height='200' />";}


 ?>             
 
                </div>
<?php require_once("footer.php"); 
 $textlocation = "";
if($_POST[pickuplocation]!="downtown"){
				 $textlocation = "Off Campus";
				}
			 else {
				   $textlocation = "Downtown";
				  }

?>

<?php
if($_POST[pickuplocation]=="downtown"){
$choosecall = "downtown";
}
else {
	$choosecall = "offcampus";
}
	// Include the Twilio PHP library
	require 'Services/Twilio.php';

	// Twilio REST API version
	$version = "2010-04-01";

 /*?>// Set our Account SID and AuthToken
	$sid = 'AC086ac952e721bdd290ad5edf0d7fddcd';
	$token = 'ea4016c87485b603e3473f4c67abfb6d';<?php */
	
	// A phone number you have previously validated with Twilio
	//$phonenumber = '7065210219';
	
	// Instantiate a new Twilio Rest Client
	$client = new Services_Twilio($sid, $token, $version);

	try {
		// Initiate a new outbound call
		$urlbuild = "".$baseurl."/callback.php?number=".$_POST[phone]."&name=".$_POST[fname]."&pickuplocation=".$choosecall	."";
		$phone = $_POST[phone];
		$call = $client->account->calls->create(
			$phonenumber, // The number of the phone initiating the call
			$phone, // The number of the phone receiving call
			$urlbuild // The URL Twilio will request when the call is answered
		);
		echo 'Started call: ' . $call->sid;
	} catch (Exception $e) {
		echo 'Error: ' . $e->getMessage();
	}
/** https://www.twilio.com/docs/api/twiml*/
}
else {
echo "Please fill out form first</li><li data-theme='c'><a href='designateddawgs.php'><center>Click here to fill out form</center></a></li></ul>";
};
?>