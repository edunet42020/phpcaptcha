<?php 
session_start();
include_once("connection.php");

if(isset($_POST['Submit'])){
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
		$msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.		
	}else{// Captcha verification is Correct. Final Code Execute here!		
		$msg="<span style='color:green'>The Validation code has been matched.</span>";	
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $birthdate=$_REQUEST['birthdate'];
    $about= $name=$_REQUEST['about'];
    $insert="insert into tabreg values(null,'$name','$email','$birthdate','$about')";
    $add=mysqli_query($conn,$insert);
    
	}

}	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Secure Professional Captcha.</title>
<link href="./css/style.css" rel="stylesheet">
<style type="text/stylesheet">
.timer {
    width: 100px;
    font-size: 3em;
    text-align: center;
}</style>
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
</head>
<body>
<br>
<div class="timer" align="center" >
            <time id="countdown">3:00</time>
        </div>
<form action="" method="post" name="form" id="form" >
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
      
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="right" valign="top"> Name:</td>
      <td>
        <input required="required" id="name" name="name" type="text">
        </tr>
    <tr>
    <tr>
      <td align="right" valign="top"> Email:</td>
      <td>
        <input required="required" id="email" name="email" type="email">
        </tr>
    <tr>
    <tr>
      <td align="right" valign="top">Date of birth:</td>
      <td>
        <input required="required" id="birthdate" name="birthdate" type="date">
        </tr>
    <tr>
    <tr>
      <td align="right" valign="top">About your self:</td>
      <td>
        <textarea cols="20" rows="5" name="about"></textarea>
        </tr>
    <tr>
      <td align="right" valign="top"> Captcha:</td>
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
        <label for='message'>Enter the code above here :</label>
        <br>
        <input required="required" id="captcha_code" name="captcha_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input required="required" name="Submit" type="submit" onclick="return validate();" value="Submit" class="button1"></td>
    </tr>
  </table>
</form>
</body>
</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">

var seconds = 180;
      function secondPassed() {
          var minutes = Math.round((seconds - 30)/60),
              remainingSeconds = seconds % 60;

          if (remainingSeconds < 10) {
              remainingSeconds = "0" + remainingSeconds;
          }

          document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
          if (seconds == 0) {
              clearInterval(countdownTimer);
              swal("opps", "You have only 3 minute to submit form,please try again", "error");
              document.getElementById("form").submit();
             } else {
              seconds--;
          }
      }
      var countdownTimer = setInterval('secondPassed()', 1000);
      </script>
      <?php
      if(isset($add))
{
        if($add>0)
        {
          echo "<script>swal('Congratulations', 'You have successfully registered', 'success');</script>";
        }
        else
        {
            echo "<script>swal('opps', 'something went wrong,please try again', 'error');</script>";
        }
        }
      ?>