<?php
/*
 * 2.2 08/04/2013
 * Added open hours, after hours will now include "select time to be called back" function.
 * ----------
 * 2.1 26/02/2013
 * Added restrictions on same number + same brand + staus !=4
 * ----------
 * v2.0 13/02/2013
 * Changes
 * One callback request per hour (cookies)
 * User ip address added to DB
 * No 1300 or 1800 number
 * Newsletter API to interspire.

 * 
<?php
// example of implication
// we need this function to solve the local. issue!
function _www(){
    $remote_ip = $_SERVER['REMOTE_ADDR'];
    $pieces = explode(".", $_SERVER['REMOTE_ADDR']);
    
    if($pieces[0] == '192' || $_SERVER['REMOTE_ADDR'] == '180.178.123.62'){ // if office ip changes we need to change this.
        return 'local.'; // all local bindings must be local dot
    }else{
        return 'www.';
    }
}
?>
  <iframe style="width:100%; height:500px;" src="http://<?=_www()?>callback.ourvacationcentre.com.au/index2.php?member=false&company=Cruise%20Megastore&width=&options=false&timeoption=true&showname=true&description=true&contactoptions=true&deal=<?= $_REQUEST['deal'] ?>"></iframe>
 * 
 */

//$email_from_address = 'noreply@my241cruise.com.au'; // need to use - enquiries@ourvacationcentre.com.au - this works noreply@my241cruise.com.au
$email_from_address = 'brentdeacon23@gmail.com';
ini_set("sendmail_from",$email_from_address);

date_default_timezone_set('Australia/Brisbane'); // set timezone to match database?
//date_default_timezone_set('Europe/Dublin'); // test time zone

function officeopen($x){ // will return true if office is open 
    // list bank holidays in array
    // office hours
    // weekdays
    $close = FALSE;
    
    $office_open = "730";
    $office_close = "1800";
    
    //sat
    $sat_open = "730";
    $sat_close = "1430";
    
    // get server time 
    $time_now = date('GH'); // looks like 2259
    //$time_now = '600' ; // testing
    
    // check
    $day_now = date('D');
    //$day_now = "Mon"; // testing 
    
    if($day_now != "Sat"){ // weekday 
        if($time_now > $office_close || $time_now < $office_open ){
            $close = true;
        }
    }else{ // Sat
        if($time_now > $sat_close || $time_now < $sat_open ){
            $close = true;
        }
    }
    // sundays closed
    if($day_now == "Sun"){
        $close = true;
    }
    
    // results
    if($close){
        return FALSE;
    }else{
        return TRUE;
    }
    
}

// cruise settings
// set default vars
$emailto = 'brentdeacon92@gmail.com';
$helptext = "<span class='help-block'><i>(Include area code.)</i></span>";

// default queues - no idea what this fucker is about!
$queueid = '-1'; // this was 21? Doc's say to use -1!

/*
 * End of settings
 */


// check form
if($_POST['check'] == 'true'){ // sptrp - basic form bot test
    //error_reporting(E_ALL);
    //ini_set('display_errors', '1');
    
    // functions

    function mssql_escape($data) {
        $data = str_replace("'", "''", $data);
        return trim($data);
    }
    
    // assume cruise if department has not been selected.
    $emailto = 'brentdeacon92@gmail.com';
    
    // check brand
    $company = mssql_escape($_POST['company']);
    if(!$company){
        // if none, use generic
        $company = 'C-View Windows';
    }   
    
    // check name
    $name = mssql_escape($_POST['name']);
    
    // check info
    $info = mssql_escape($_POST['info']);
    

    // check email address
    if(!$_POST['contact'] && $_REQUEST['contactoptions'] == 'true'){
        $error = true;
        $error_message = 'Please select contact options.';
    }    
    
    // construst note to be passed on.
    $ip = $_SERVER['REMOTE_ADDR'];
    $notes = "[IP:$ip]";
    
    $info = mssql_escape($_POST['info']);
    if($info){
        $notes .=  "[{$info}] "; 
    }
    
    // if phone selected check phone number
    if($_POST['contact'] == 'phone' || $_POST['contact'] != 'email'){
        // look to see if they have used the callback withing the hour
        $company_cookie = base64_decode($company); // un-hash company name
        if($_COOKIE["callback"]){ // look for the 1 hour cookie
            // callback request has already been sent this hour..
            // show message.
            $error = true;
            $error_message = 'Your callback request has already been sent';
        }

        
        $phone = mssql_escape($_POST['phone']);
        $phone = str_replace(" ", "", $phone);
        $phone = str_replace("-", "", $phone);
        $phone = str_replace(".", "", $phone);
        if(!$phone){
            $error = true;
            $error_message = 'Enter your phone number';
            
        }else{
            // something has been entered
            $ftl = trim(substr($phone, 0, 2));
            
            if(strlen($phone) != 10 || !is_numeric($phone) || $phone[0] != 0 || $ftl == '13' || $ftl == '18'){
                $error = true;
                $error_message = 'Check your phone number. Please enter only numbers and include your area code.';
            }
            
            if(!$error){
                // source is used to link the request with a que by using a prefix [sales] for example! More prifixs might be needed in the future
                $source = mssql_escape($_POST['source']);
                if(!$source){
                    // if nothing has been included in the form, just use the current url.
                    //$source = $_SERVER["PHP_SELF"]; // as this is an iframe usr ref url
                    $source = $_SERVER['HTTP_REFERER'];

                }
                // we need to add the prefix
                $source = $prefix.' '.$source; // chane sales to cruse, travel and member. Mike can link up the camp
                
                // this works out what time the punter wants to be called back...
                $timevalue = mssql_escape($_POST['timevalue']);
                if($timevalue != 'N'){

                    if(is_numeric($timevalue)){
                        $addtime = 60*60*$timevalue;
                        $time = date('Y-m-d H:i:s', time()+$addtime);
                    }else{
                        // monday and 
                        if($timevalue == 'M'){
                            $nextmon = strtotime("next Monday");
                           $time = date('Y-m-d 12:i:s', $nextmon);
                        }
                        // tommorrow and 
                        if($timevalue == 'T'){
                            $tommorow = strtotime("+1 day");
                            $time = date('Y-m-d 12:i:s', $tommorow);
                        }
                    }

                }else{
                    $time = date('Y-m-d H:i:s'); // just use now - I think this can be null and it will default to now!
                }
                
                // old
                //$serverName = "172.28.0.1,2344"; 
                //$connectionInfo = array( "Database"=>"CyTrack", "UID"=>"cytrackuser", "PWD"=>"Niebulung");
                //$conn = sqlsrv_connect( $serverName, $connectionInfo);
                // 
                // new
                $serverName = "172.27.0.1,2348"; 
                $connectionInfo = array( "Database"=>"CCS", "UID"=>"CCSUser", "PWD"=>"LGECCS");
                $conn = sqlsrv_connect( $serverName, $connectionInfo);
                
                if($conn === false){
                     die(print_r(sqlsrv_errors(), true)); // show error - testing only
                }

            }
            
        }
       
    }else if($_POST['contact'] == 'email'){ // selected to be emailed!
  
        // check email has been entered
        $emailaddress = mssql_escape($_POST['emailaddress']);
        if(!$emailaddress){
           $erroremail = true;
           $error_message_email = 'Enter Your Email Address.';
        }else{
            // check email address
            if(eregi("^[a-z0-9._-]+@[a-z0-9._-]+.[a-z]{2,6}$", $email)) {
                // no show error
                $error_message_email = 'Check Your Email Address.';
                $erroremail = true;
            }
            
        }
        
        // now check the string looks like an emaill address
        
        // construct NOTEs
        
        if(!$erroremail){
            // send email
            
            $message .= "THIS IS A COMPUTER GENERATED EMAIL  *DISREGARD THE 'FROM' ADDRESS* *DO NOT CLICK REPLY* \n \n ";
            $message .= "USERS IP: $ip  \r\n";
            $message .= "-------------------------------------- \r\n";
            $message .= "Email: $emailaddress". "\r\n";
            
            if($name){
                $message .= "Name: $name.". "\r\n";
            }
            
            if($memno){
                $message .= "Member No.: $memno". "\r\n";
            }
            
            if($deal){
                $message .= "Deal: $deal". "\r\n";
            }
            
            if($info){
                $message .= "Enquiry Details: \n $info". "\r\n";
            }
            
            $message = str_replace("\n.", "\n..", $message); // might be required for windows servers only.
            
            //echo $message;
            
            $emailto = $emailto;
            //$emailto = ''brentdeacon23@gmail.com'';
            $subject = "$company - Web Form Enquiry";
            $headers = "From: $email_from_address" . "\r\n" .
                "Reply-To: $emailaddress" . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            //echo "mail($emailto, $subject, $message, $headers);";
            $mailsent = mail($emailto, $subject, $message, $headers); // testing...

            if($mailsent){
                 $email_sent = true;
            }else{
               $erroremail = true;
               $error_message_email = 'An error has occured, your email has not been sent.';
            }
            
        }
           
    }
    
}
?>



<?php
/*
 * member = true - adds member number in form
 * 
 */

$company = $_REQUEST['company'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Call Back Request</title>
    <?php 
    if($email_sent || $request_sent || $request_muti){ // refresh page after x seconds to reset the form!
       ?>
    <meta http-equiv="refresh" content="60" >
    <?php
    }
    ?>
    	<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
    div#content {
        display: none;
        background:none transparent
        }

    div#loading {
        top: 200 px;
        display:block;
        margin: 10 auto;
        position: absolute;
        z-index: 1000;
        width: 50px;
        height: 50px;
        background: url(img/loading.gif) no-repeat;
        cursor: wait;
        background:none transparent
        }

        <!-- BODY {background:none transparent;}-->
        form, .well {margin: 0;}
        .form-horizontal .control-group , .alert{ margin-bottom: 5px !important;}
        .well { width: <?= $_REQUEST["width"]; ?> !important;}
        textarea { width:97% !important;}
    </style>
  
    <SCRIPT language=Javascript>
        <!--
        function isNumberKey(evt)
        {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
        }
        //-->
    </SCRIPT>
   
<script language="JavaScript" type="text/javascript">
    /*<![CDATA[*/
    var Lst;

    function CngClass(obj){
     if (typeof(obj)=='string') obj=document.getElementById(obj);
     if (Lst) Lst.className='';
     obj.className='btn disabled';
     Lst=obj;
    }

     function preloader(){
            document.getElementById("loading").style.display = "none";
            document.getElementById("content").style.display = "block";
        }//preloader
        window.onload = preloader;
        
    /*]]>*/
</script>
   
  </head>
  <body onload="preloader()"> 
      
<div id="loading"></div>
      
      <?php //<div class="well well-small span5"> ?>
          <div id="content">
          <!-- <h4>Request A Call</h4> -->
 
      <?php 
      //$company_cookie = base64_decode($company);
      // $_COOKIE["$company_cookie"]
      
      if($request_sent || $email_sent || $request_muti){

          // if email sent,
          if($email_sent){
            ?>
          
          <div class="alert alert-success">
              <p>
                <strong>Thank you</strong>, Your enquiry has been sent.  
              </p>  
          </div>
          
          <?php
          }
           
          if($request_muti){
          ?>
          
              <div class="alert alert-success">
                  <p>
                    <strong>Thank you</strong>, Your request to be called back is already in the queue. 
                  </p>  
              </div>
          
          <?php
          }
          ?>
          <?php
          
          if($request_sent){
             ?>
          
              <div class="alert alert-success">
                <?php
                if($timevalue > 0 && $timevalue != 'N'){
                    
                    /*
                    $nextmon = strtotime("next Monday");
                    $time = date('Y-m-d 12:i:s', $nextmon);
                    */
                
                    ?>
                    <strong>Request callback has be sent. We will call you on <?= $phone ?> in <?= $timevalue ?> hour<?php if($timevalue > 1){ echo 's';}?>.</strong>
                    <?php
                }else{
                    
                    // display relavent message
                    
                    if($timevalue == 'N' || !$timevalue){
                        
                        if(officeopen()){
                            ?>
                            <strong>We are now calling you on <?= $phone ?>...</strong>
                            <?php
                        }else{
                        ?>
                            <strong><span style="coloe:red;">Our office is currently closed! </span> You have been placed in a queue, we will call you on <?= $phone ?> as soon as we open.</strong>
                        <?php  
                        } ?>
                    <?php
                    }else{
                    ?>
                        <strong>Thank you, We will call you on <?= $phone ?> on <?= date('l',strtotime($time)) ?> </strong>
                    <?php
                    }
                }
                ?>

            </div>
             
          <?php
          }

      }else{
      ?>

        <form class="form-horizontal" action="?&member=<?= $_REQUEST['member']?>&company=<?= $_REQUEST['company']?>&width=<?= $_REQUEST['width']?>&options=<?= $_REQUEST['options']?>&timeoption=<?= $_REQUEST['timeoption']?>&showname=<?= $_REQUEST['showname']?>&description=<?= $_REQUEST['description']?>&contactoptions=<?= $_REQUEST['contactoptions']?>&deal=<?= $_REQUEST['deal']?>&nls=<?= $_REQUEST['nls']?>" method="POST">
        
            <input type="hidden" name="company" value="<?= $company ?>" />
            <input type="hidden" name="time" value="<?= $time ?>" />
            <input type="hidden" name="check" value="true" />
            <input type="hidden" name="source" value="<?php if($source){ echo $source; }else{ echo $_SERVER['HTTP_REFERER'];} ?>" />

            <!--
            <strong>
                  <p>
                    Enter your details below and we will call you for free!  
                  </p>
            </strong>
            -->
            
            <?php
            /*
            if(!officeopen()){
                ?>
                <div class="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>NOTE!</strong> Our office is currently closed, please select a time for us to call you.
                </div>
            <?php
            }
             */
            ?>
           
             <?php
             if($_REQUEST['showname']){
             ?>
            
                  <div class="control-group">
                    <label class="control-label" for="inputName">Your Name</label>
                    <div class="controls">
                      <input type="text" name="name" class="" value="<?php if($name){ echo $name; }else if($_REQUEST['showname'] != 'true'){ echo $_REQUEST['showname']; } ?>" />
                    </div>
                  </div>
            
             <?php
             }
             ?>
           
            <?php
            if($_REQUEST['contactoptions'] == 'true'){
                ?>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Please contact me via</label>
                <div class="controls">
                    <div class="radio">
                      <input type="radio" name="contact" id="phonebutton" value="phone" <?php if($_POST['contact'] == 'phone' || $_POST['contact'] != 'email'){ echo 'checked';} ?>> Phone
                      <br />
                      <input type="radio" name="contact" id="emailbutton" value="email" <?php if($_POST['contact'] == 'email'){ echo 'checked';} ?>> Email
                    </div>   
                </div>
            </div>
                <?php
            }
            ?>
            
            

            <?php
            // if time 
            if($_REQUEST['timeoption'] == 'true' || !officeopen()){ // show time option when office closed.
            ?>
              <div class="control-group phone" id="phoneinput" <?php if($_POST['contact'] == 'email'){ echo ' style="display:none;"'; } ?>>
                <label class="control-label" for="inputPassword">Please call me</label>
                <div class="controls">
                    <select name="timevalue" class="">
                        
                        <?php
                        // dotd
                        // work out close houe
                        $day = date('N');
                        // test day sunday 7 
                        //$day = 6;
                        
                         if(!$day > 17) { // close every day at 6pm
                                $closed = true;
                            }else {
                                if($day == 6 && $day > 13) { // close Sat at 2pm
                                    $closed = true;
                                }else {
                                    $open = true;
                                }
                            }
    
                            if($day == 7){
                                $closed = true;
                            }
                            
                            if($open && officeopen()){ // only show Now when open
                                echo "<option value='N'>Now</option>";
                            }
                        

                        
                        if($day == 6){ // sunday closing time
                            $closed_hour = "13";
                        }else{
                            $closed_hour = "18";
                        }
                        
                        $this_hour = date('H'); // 01 - 24
                        $hours_left_today = ($closed_hour-$this_hour)-1;

                        for ($i=1; $i<=$hours_left_today; $i++){
                            $options .= "<option value='$i'";
                            if($_POST['timevalue'] == $i){
                                $options .= "selected='selected'";
                            }
                            $options .= ">+$i hour";
                            if ($i != 1){ $options .= "s";}
                            $options .= " from now</option>";
                        }  
                        
                        if($day == 6){
                            $options .= "<option value='M' ";
                            if($_POST['timevalue'] == 'M'){
                                $options .= " selected='selected' ";
                            }
                            $options .= ">Monday</option>";
                            
                        }else{
                            $options .= "<option value='T' ";
                            if($_POST['timevalue'] == 'T'){
                                $options .= " selected='selected' ";
                            }
                            $options .= ">Tomorrow</option>";
                            
                        }
                        
                        echo $options;
                        // 
                        ?>
                       
                    </select>
                  
                </div>
              </div>
            <?php
            } 
            ?>


              <div class="control-group <?php if($error){ echo 'error';} ?> phone" id="phoneinput" <?php if($_POST['contact'] == 'email'){ echo ' style="display:none;"'; } ?>>
                <label class="control-label" for="inputEmail">Phone Number<br /><?=$helptext?></label>
                <div class="controls">
                  <input type="text" name="phone" value="<?= $phone ?>" class="" onkeypress="return isNumberKey(event)" >
                    <?php
                    if($error){
                        ?>
                        <div class="alert alert-error">
                            <?= $error_message?>
                        </div>
                    <?php
                        }
                    ?>
                </div>
              </div>

            
              <div class="control-group <?php if($erroremail){ echo 'error';} ?>" id="emailinput" <?php if($_POST['contact'] != 'email' || !$_POST['contact'] ){ echo ' style="display:none;"'; } ?> >
                <label class="control-label" for="inputEmail">Email Address</label>
                <div class="controls">
                  <input type="email" name="emailaddress" class="" value="<?= $email ?>" >   
                    <?php
                    if($erroremail){
                        ?>
                        <div class="alert alert-error">
                            <?= $error_message_email?>
                        </div>
                    <?php
                        }
                    ?>
                </div>
              </div>
            
                 <?php
                 if($_REQUEST['member']){
                     ?>
                      <div class="control-group">
                        <label class="control-label" for="inputPassword">Membership Number</label>
                        <div class="controls">
                          <input type="text"  name="memno" value="<?php if($memno){ echo $memno; }else if($_REQUEST['member'] != 'true'){ echo $_REQUEST['member']; } ?>"  />
                        </div>
                      </div>
                 <?php
                 }
                 ?>
            
                 <?php
                 if($_REQUEST['deal']){ // deal as string.
                 ?>
                  <div class="control-group" id="dealinput" <?php if($_POST['email']){ echo ' style="display:none;"'; } ?>>
                    <label class="control-label" for="inputEmail">Deal</label>
                    <div class="controls">
                      <input type="text" name="deal" value="<?= $_REQUEST['deal'] ?>" >
                    </div>
                  </div>
            <?php
                 }
            ?>
            
            
                 <?php
                 if($_REQUEST['description'] == 'true'){
                     ?>

                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Enquiry Details</label>
                    <div class="controls">
                        <textarea name="info" rows="6"><?= $info ?></textarea>
                    </div>
                  </div>

                 <?php
                 }
                 ?>
            
            <?php
            if($_REQUEST['nls']){
            ?>
                <div class="control-group nsl" <?php if($_POST['contact'] != 'email' || !$_POST['contact'] ){ echo ' style="display:none;"'; } ?>>
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" name="newsletter" value="<?=$_REQUEST['nls']?>"> Newsletter sign up.
                        </label>
                    </div>
                </div>
            <?php
            }
            ?>
            
                <div class="control-group">
                    <div class="controls">
                       <input class="btn" type="submit" onclick="CngClass(this);" value="<?php 
                       if($_REQUEST['contactoptions'] != 'true'){
                           echo 'Call Me';
                        }else{
                            echo 'Submit';
                       }
                       ?>" />
                    </div>
                </div>

        </form>

        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script>
        $(document).ready(function(){
          $("#phonebutton").click(function(){
            $("#emailinput").slideUp(500);
            $(".phone").delay(500).slideDown(500);
            $(".nsl").fadeOut("slow");
          });
          $("#emailbutton").click(function(){
            $(".phone").slideUp(500);
            $("#emailinput").delay(500).slideDown(500);
            $(".nsl").delay(500).fadeIn("slow");
          });
        });
        </script>
    <?php 
      }
    ?>
      </div>
        
  </body>
</html>
