<?php require_once("config.php"); ?>
<?php $pageid = $_GET[id]; ?>
<?php require_once("functions.php"); ?>
<?php 
$pagetitle .= "The Last Call - ";
$pagetitle .= taxi_name($pageid); ?>
<?php echo lc_header($pagetitle);//include("header.php"); ?>
<?php $parent_menu = 1;?>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/splashscreen.css" />
<script src="js/jquery.splashscreen.js"></script>
<script src="js/script.js"></script>
<!--    <div id="promoIMG">
    	<img src="img/available_now.png" alt="Available Now" width="200px" />
</div>-->

    <div data-role="content">
                <?php
				echo taxi_page($pageid);
				?>
    </div>
   		

<?php require_once("footer.php"); ?>
        	
            
            
      