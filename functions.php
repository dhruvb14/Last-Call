<?php
/*
*   Header Function
*
*   @Parameters 
*	$title - title for page
*
*
*/
function lc_header($title)
{
ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo $title;?></title>
        <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.css" />
        <link rel="stylesheet" href="my.css" />
        <style>
    </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.mobile/1.1.1/jquery.mobile-1.1.1.min.js">
        </script>
        <script src="my.js">
        </script>
        <style>
        .left { float : left; width : 48%; }
.right { float : right; width : 48%; }
.spacer { clear : both; }
        </style>
    </head>
    <body>
      <!-- Home -->
    <div data-role="page" id="page1">
            <div data-theme="a" data-role="header">
                <a data-role="button" data-theme="b" href="index.php" data-icon="home" data-iconpos="left" class="ui-btn-left">
                    Home
                </a>
                <a data-role="button" data-theme="b" href="<?php echo $baseurl; ?>/website/" data-icon="check" data-iconpos="right" class="ui-btn-right" data-transition="slideup" rel="external" target="_blank">
                    NMI Site
                </a>
                <h3>
                    The Last Call
                </h3>
            </div>
                          <h4>  <?php  //echo random_fact(); ?></h4>
<?php

$header_out = ob_get_clean();
return $header_out;

}
/*
*   Alcohol Fact Function
*
*   @Parameters 
*	
*	@output
*	Returns a random fact about alcohol for use on homepage
*/
function random_fact() 
	{
		global $connection;
		$output_fact = "";
		$result = mysql_query("SELECT * FROM facts ORDER BY RAND() LIMIT 0,1;");
		while ($row = mysql_fetch_array($result)) 
			{
  			$output_fact .= "<strong>Did you know that...</strong>
			" . ucfirst($row['fact']) . "";
  			}
  		return $output_fact;
	}
	
	
/*
*   Taxi Name Function
*
*   @Parameters 
*	$pageid - pass in taxi ID
*	@output
*	Returns the Name of the Taxi company based on ID
*/
	
	function taxi_name($pageid) 
	{
		global $connection;
		$taxi_name_fromid = mysql_query("SELECT * FROM taxi WHERE taxi_id = ".$pageid."");
 		//$count="1";
 		$row = mysql_fetch_array($taxi_name_fromid);
  		
	 	$output_taxi_name.= $row['taxi_name'];
			
  		return $output_taxi_name;
	}	

/*
*   Taxi Page Generator Function
*
*   @Parameters 
*	$pageid - pass in taxi ID
*	@output
*	Returns the Taxi page with all relevant taxi information
*/
		
	function taxi_page($pageid) 
	{
		global $connection;
		$output_taxi_page = "";
		ob_start();
		?>

        <?php
		$output_taxi_page.= ob_get_clean();
		$result = mysql_query("SELECT * FROM taxi WHERE taxi_id = ".$pageid."");
 		//$count="1";
 		$row = mysql_fetch_array($result);
  		
	 	$output_taxi_page.="<center><h2>".$row['taxi_name']."</h2>";
		$output_taxi_page.="<p>".$row['taxi_address']."</p>";
		$output_taxi_page.="<img id='map' src='https://maps.googleapis.com/maps/api/staticmap?center=".$row['taxi_address']."&amp;zoom=14&amp;size=288x200&amp;markers=".$row['taxi_address']."&amp;sensor=false' width='288' height='200' />";
      $output_taxi_page.="<a href='tel://".$row['taxi_description']."' data-direction='forward' data-role='button' data-theme='b'>Call ".$row['taxi_name']."</a></center>";
			

			
			
	  	
	  	$output_taxi_page.="</div>";
  		return $output_taxi_page;
	}	
/*
*   Taxi List Generator Function
*
*   @Parameters 
*	@output
*	Generates a page body with the Name of all Taxi companies in The Last Call Taxi database
*/
		
function taxi_home() 
	{
		global $connection;
		$output_taxi_home = "";
		ob_start();
		?>
        <ul id="taxis" data-role="listview" data-divider-theme="b" data-inset="false">
                    <li data-role="list-divider" role="heading">
                        Taxi's in Athens
                    </li>
        <?php
		$output_taxi_home.= ob_get_clean();
		$result = mysql_query("SELECT * FROM taxi");
 		$count="1";
 		while ($row = mysql_fetch_array($result)) 
  		{
	 	if($row['taxi_rating']>'1')
			{
			$output_taxi_home.= "<li data-theme='c'>";
			$output_taxi_home.= "<a href='taxi_page.php?id=" . $row['taxi_id'] . "' data-transition='slide'>";
			$output_taxi_home.=  $row['taxi_name'];
			$output_taxi_home.= "</a></li>";

			
			}
	  	}
	  	$output_taxi_home.="</ul>";
  		return $output_taxi_home;
	}	
	
/*
*   Waiting Downtown Function
*
*   @Parameters 
*	@output
*	Returns a list of people queued for pickup from downtown
*/
	
function waiting_downtown() 
	{
		global $connection;
		$output_downtown = "";
		ob_start();
		?>
        <div data-role="collapsible" data-collapsed="true">
        <h3>Downtown Pickup Priority </h3>
		<div style="">
		<div align="center"><strong>Below is a priority list for downtown pickup</strong></div><br/>
        <div class="ui-grid-b">
        <?php
		$output_downtown.= ob_get_clean();
		$result = mysql_query("SELECT * FROM waiting");
		$output_downtown.= "<div class='ui-block-a'>Priority<br></div>";
 		$output_downtown.= "<div class='ui-block-b'>Name<br></div>";
	 	$output_downtown.= "<div class='ui-block-c'>Location<br></div>";
 		$count="1";
 		while ($row = mysql_fetch_array($result)) 
  		{
	 	if($row['pickedup']=='0' && substr($row['pickuplocation'],0,8)=='downtown')
			{
				$namefl = ucfirst($row['fname']);
				$namefl .= " ";
				$namefl .= substr(($row['lname']), 0, 1);
				$namefl .= ".";

			$output_downtown.= "<div class='ui-block-a'><br>" . $count. "</div>";
			$output_downtown.= "<div class='ui-block-b'><br>" . $namefl ."</div>";
  			$output_downtown.= "<div class='ui-block-c'><br>" . ucfirst($row['pickuplocation']) . "</div>";
			$count++;
			}
	  	}
	  	$output_downtown.="</div></div></div>";
  		return $output_downtown;
	}	

/*
*   Waiting Off Campus Function
*
*   @Parameters 
*	@output
*	Returns a list of people queued for pickup from Off Campus
*/


function waiting_offcampus() 
	{
		global $connection;
		$output_downtown = "";
		ob_start();
		?>
        <div data-role="collapsible" data-collapsed="true">
        <h3>Off Campus Pickup Priority </h3>
		<div style="">
		<div align="center"><strong>Below is a priority list for Off Campus pickup</strong></div><br/>
        <div class="ui-grid-b">
        <?php
		$output_downtown.= ob_get_clean();
		$result = mysql_query("SELECT * FROM waiting");
		$output_downtown.= "<div class='ui-block-a'>Priority<br></div>";
 		$output_downtown.= "<div class='ui-block-b'>Name<br></div>";
	 	$output_downtown.= "<div class='ui-block-c'>Location<br></div>";
 		$count="1";
 		while ($row = mysql_fetch_array($result)) 
  		{
	 	if($row['pickedup']=='0' && $row['pickuplocation']!='downtown')
			{
				$namefl = ucfirst($row['fname']);
				$namefl .= " ";
				$namefl .= substr(($row['lname']), 0, 1);
				$namefl .= ".";
			$output_downtown.= "<div class='ui-block-a'><br>" . $count. "</div>";
			$output_downtown.= "<div class='ui-block-b'><br>" . $namefl . "</div>";
  			$output_downtown.= "<div class='ui-block-c'><br>" . ucfirst("Off Campus") . "</div>";
			$count++;
			}
	  	}
	  	$output_downtown.="</div></div></div>";
  		return $output_downtown;
	}		
?>