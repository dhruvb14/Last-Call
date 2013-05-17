<?php require_once("config.php"); ?>
<?php require_once("functions.php"); ?>
<?php echo lc_header('Welcome to The Last Call');//include("header.php"); ?>

<?php $parent_menu = 1;?>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="css/splashscreen.css" />
<script src="js/jquery.splashscreen.js"></script>
<script src="js/script.js"></script>
<!--    <div id="promoIMG">
    	<img src="img/available_now.png" alt="Available Now" width="200px" />
</div>-->
    <div data-role="content">
               <div style=" text-align:center width:300px;"><img src="img/logo.png" width="120px" align="left"/> <?php echo random_fact();?></div>
               

                    
                </div>
                
               			 


                <a data-role="button" data-theme="c" href="designateddawgs.php" data-icon="grid" data-iconpos="right" data-transition='slide'>
                    Designated Dawgs
                </a>
                <a data-role="button" data-theme="e" href="taxi.php" data-transition='slide'>
                    Taxi Service
                </a>
                <a data-role="button" data-theme="a" href="alcohol-awareness.php" data-transition='slide'>
                    Alcohol Help
                </a> 
                <center><iframe id="vp1CXdu8" title="Video Player" width="300" height="167" frameborder="0" src="http://embed.animoto.com/play.html?w=swf/vp1&e=1349310439&f=CXdu8z0YKOSqL7JwovMi2w&d=56&m=p&r=360p+720p&volume=100&start_res=360p&i=m&options=" allowfullscreen></iframe></center>
                
                
               
                
                
            </div>
           
   			

<?php require_once("footer.php"); ?>
        	