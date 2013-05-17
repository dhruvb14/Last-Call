<?php require_once("config.php"); ?>
<?php require_once("functions.php"); ?>
<?php echo lc_header('The Last Call - Designated Dawgs Downtown');//include("header.php"); ?>
<?php $parent_menu = 2;?>
            
                            <div data-role="collapsible-set" data-theme="" data-content-theme="">                  
            <?php echo waiting_downtown();?>
            </div>
            <div data-role="content" style="padding: 15px">
                <form action="postdata.php" method="post" autocomplete="on">
                  <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput1">
                            First Name
                        </label>
                        <input name="fname" id="textinput1" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput2">
                            Last Name
                        </label>
                        <input name="lname" id="textinput2" placeholder="" value="" type="text" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="textinput3">
                            Cell Number
                        </label>
                        <input name="phone" id="textinput3" placeholder="" value="" type="tel" />
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="vertical" data-mini="true">
                        <legend>
                            What part of athens are you being dropped off?
                        </legend>
                        <input name="compass" id="radio1" value="Milledge" type="radio" />
                        <label for="radio1">
Milledge                        </label>
                        <input name="compass" id="radio2" value="5Points" type="radio" />
                        <label for="radio2">
Five Points                        </label>
                        <input name="compass" id="radio3" value="EastSide" type="radio" />
                        <label for="radio3">
East Side                        </label>
                        <input name="compass" id="radio4" value="WestSide" type="radio" />
                        <label for="radio4">
                            West Side
                        </label>
                          <input name="compass" id="radio5" value="MLK" type="radio" />
                        <label for="radio5">
                            MLK Drive
                        </label>
                          <input name="compass" id="radio6" value="OnCampus" type="radio" />
                        <label for="radio6">
                           On Campus
                        </label>
                    </fieldset>
                </div>
                
                        
                        <input type="hidden" name="pickuplocation" value="downtown">
                
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-mini="true">
                        <label for="address">
                           Destination Address
                        </label>
                        <input name="address" id="address " placeholder="" value="" type="text" />
                    </fieldset>
                </div>
                <input type="submit" data-theme="b" data-icon="check" data-iconpos="left" value="Submit" data-mini="true" />
            </div>
                </form>
                

<?php require_once("footer.php"); ?>
        	