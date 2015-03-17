<!-- Page Content -->
<div class="container">
  <div class="row"  style="margin-right:auto;margin-left:auto;">
    <hr>
  </div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-primary">
        <div class="panel-heading panel-heading-first">
          <h3 class="panel-title">Kiitos yhteydenotosta</h3>
        </div>
        <div class="panel-body">
	  <?php
	     if(isset($_POST['email'])) {
             $email_to = "dforsber@gmail.com";
             $email_subject = "Contact from customer";
             function died($error) {
                 // your error code can go here
                 echo "We are very sorry, but there were error(s) found with the form you submitted.";
                 echo "These errors appear below.<br /><br />";
                 echo $error."<br /><br />";
                 echo "Please go back and fix these errors.<br /><br />";
                 die();
             }
             // validation expected data exists
             if(!isset($_POST['name']) ||
                !isset($_POST['email']) ||
                !isset($_POST['message'])) {
                 died('We are sorry, but there appears to be a problem with the form you submitted.');
             }

             $name = $_POST['name'];
             $email_from = $_POST['email'];
             $message = $_POST['message'];
             $error_message = "";
             $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
             if(!preg_match($email_exp,$email_from)) {
                 $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
             }
             $string_exp = "/^[A-Za-z .'-]+$/";
             if(!preg_match($string_exp,$name)) {
                 $error_message .= 'The First Name you entered does not appear to be valid.<br />';
             }
             if(strlen($message) < 2) {
                 $error_message .= 'The Comments you entered do not appear to be valid.<br />';
             }
             if(strlen($error_message) > 0) {
                 died($error_message);
             }
             $email_message = "Form details below.\n\n";
             function clean_string($string) {
                 $bad = array("content-type","bcc:","to:","cc:","href");
                 return str_replace($bad,"",$string);
             }
             $email_message .= "Name: ".clean_string($name)."\n";
             $email_message .= "Email: ".clean_string($email_from)."\n";
             $email_message .= "Comments: ".clean_string($message)."\n";
             // create email headers
             $headers = 'From: '.$email_from."\r\n".
                 'Reply-To: '.$email_from."\r\n" .
                 'X-Mailer: PHP/' . phpversion();
             @mail($email_to, $email_subject, $email_message, $headers);
         }
     ?>
	  <p>Olemme teihin yhteydessä!</p>
	  <br>
          <p>Ystävällisin terveisin,<br>
	  -&nbsp;Dan Forsberg</p><br>
	  <img src="images/isecure-small-logo.png" style="margin-left:auto;margin-right:auto;text-align:center;"><br>
	  <br>
	  <br>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
