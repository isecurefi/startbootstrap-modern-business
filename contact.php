<?php include_once('lang.php'); ?>
</div>

<!-- Page Content -->
<p id="contact"></p>
<div class="container-fluid contact shadow">
  <div class="container">
    <div class="row contact">
      <div class="col-md-3 col-sm-3 col-xs-12">
        <img src="images/dforsber.png" class="facepalm"><br>
        OTA YHTEYTTÄ<br>
        ISECure Oy<br>
        CEO Dr. Dan Forsberg, AWS SA Prof, AWS Sec.Spec., AWS Dev Assoc, CSPO<br>
        dan.forsberg (a) isecure.fi<br>
        <br>
        Kokkola, Finland<br>
        <br>
        Y-tunnus: 2296336-9<br><br>
      </div>
      <div class="col-md-9 col-sm-9 col-xs-12">
        <p><?php get_text('contact'); ?></p>
	<p class="contact">

	  <!-- redirect to: thankyou.php -->
	  <input type="text" id="name"  placeholder="Nimi"><br>
	  <input type="text" id="email" placeholder="S&auml;hk&ouml;posti"><br>
	  <textarea id="message" cols="" rows="5" placeholder="Viesti"></textarea><br>
          <button class="btn btn-primary"
                  style="text-align:center;width:auto;color:white;"
                  onclick="SendSNS(document.getElementById('message').value,
                           document.getElementById('name').value,
                           document.getElementById('email').value,
                           document.getElementById('result'),
                           'thankyou.php');">L&Auml;HET&Auml;
          </button><br>
          <p id="result"></p>
          
	</p>
      </div>
    </div>
    <!-- /.row -->
  </div>
</div>

<!-- Page Content -->
<div class="container">
