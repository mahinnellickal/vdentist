<?php 
session_start();
if(isset($_POST['submit'])) {
        
    if(trim($_POST['name']) == '') {
        $hasError = true;
    } else {
        $name = trim($_POST['name']);
    }
    
    if(trim($_POST['email']) == '')  {
        $hasError = true;
    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }
    if(trim($_POST['phone']) == '') {
        $hasError = true;
    } else {
        $subject = trim($_POST['phone']);
    }

    
    if(trim($_POST['address']) == '') {
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['address']));
        } else {
            $comments = trim($_POST['address']);
        }
    }

    if(empty($_POST['6_letters_code'] ) ||
      strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
    {
    //Note: the captcha code is compared case insensitively.
    //if you want case sensitive match, update the check above to
    // strcmp()
      echo "Errrrror";
    }
    

    //If there is no error, send the email
    if(!isset($hasError)) {
        /*$emailTo = 'salihkulangara@gmail.com'; //Put your own email address here
        $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
        $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        mail($emailTo, $subject, $body, $headers);*/
        $emailSent = true;
        echo "Success";
    }
}








$page_title = 'Add Clinic';
require 'inc/header.php';
?>
		<div id="left-list-part">
        	<h1>Add your Clinic in Our Directory</h1>
            <ul id="clinic-form">
     	<form name="contact"  action="#" method="">
       	 <li id="sux-msg">
            	<p>Your Request sent successfully, We will be in touch with u soon, Thank you</p>
            </li>
        	<li>
            <label>Clinic Name</label>
            <input type="text" name="name" id="name" placeholder="eg - Dr John Doe's Clinic"/>
            <span class="error errname">Name field should not be blank</span>
            </li>
            <li>
            <label>email</label>
            <input type="text" name="email" id="email" placeholder="eg - johndoe@arrowhead.com"/>
            <span class="error erremail">emailfield should not be blank</span>
            </li>
            <li>
            <label>phone</label>
            <input type="text" name="phone" id="phone" placeholder="eg - (404) 355-2001"/>
            <span class="error errphone">phone field should not be blank</span>
            </li>
            <li>
            <label>
                Address
            </label>
            <textarea name="address" id="address" placeholder="Clinic Address"></textarea>
            <span class="error erraddress">You should fill the correct address</span>
               </li> 

		
		<li>
		<label>Please Verify</label>
		<div style="width:200px;height:50px; float:left; margin-left:50px; position:relative;"><img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' >
		<a class="refresh" href='javascript: refreshCaptcha();' title="refresh captcha">Here</a>
		</div>
		<input type="text" id="6_letters_code" name="6_letters_code" class="txt5" placeholder="re-type above letters" style="margin-right:50px;"/>
		<span class="error errcapt" style="top:87px; left:150px">You should verify the captcha given</span>
		</li>



            <li>
              <input type="submit" name="submit" id="add" value="submit"/>
               <div id="loader"><img src="images/ajax-loader.gif" /></div>
            </li>
        </ul>
        </form>
            
            
            
        </div><!--end left-list-->
        <div id="section-right">
        	<h1 class="add-link">
            	<a href="#">Add your Clinic Here</a>
            </h1>
            
            <ul>
            	<li>
                	<h1>A Healthy Mouth Equals a Healthy Body</h1>
                    <img src="images/1.jpg"/>
                    <p>How often do we hear the phrase "a healthy mouth equals a healthy body"? I'm guessing not often. People often mistake a good oral hygiene to being only limited to providing a healthy mouth. Common sense tells us that....</p>
                    <div class="rd-link">
                    	<a href="healthy-mouth.php">Read More</a>
                    </div>
                </li>
                
                
                <li>
                	<h1>TOOTH DECAY: INFORMATION FOR PREVENTION</h1>
                    <img src="images/2.jpg"/>
                    <p>How often do we hear the phrase "a healthy mouth equals a healthy body"? I'm guessing not often. People often mistake a good oral hygiene to being only limited to providing a healthy mouth. Common sense tells us that....</p>
                    <div class="rd-link">
                    	<a href="tooth-decay.php">Read More</a>
                    </div>
                </li>
                
                
                
                <li>
                	<h1>FUN FACTS ABOUT TOOTHPASTE</h1>
                    <img src="images/2.jpg"/>
                    <p>How often do we hear the phrase "a healthy mouth equals a healthy body"? I'm guessing not often. People often mistake a good oral hygiene to being only limited to providing a healthy mouth. Common sense tells us that....</p>
                    <div class="rd-link">
                    	<a href="funfacts.php">Read More</a>
                    </div>
                </li>
                
                
                
            </ul>
        
        </div><!--end right-list-->
        
        
        
<?php require 'inc/footer.php'; ?>