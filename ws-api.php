<?php include('lang.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('header.php'); ?> 
  </head>
  <body>
    <?php include('navigation.php'); ?>
    <?php include('carousel.php'); carousel(2); ?>
    <?php include('supportedbanks-fluid.php'); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ISECure WS-Kanava API</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-md-8">
	      <p>WS-Kanava SaaS palveluna - API</p>
 
	      <p>Oletko kehittämässä omaa palvelua tai tuotetta, jossa
	        hyödynnät WS-kanavaa? Tarjoamme kilpailukykyiseen
	        hintaan WS-Kanavan SaaS palveluna.</p>
              
              <p>Palvelumme käyttää mm. AWS:n API Gateway, Dynamo DB,
	        Cognito Your User Pool, CloudWatch ja Lambda
	        palveluita ja skaalautuu tarpeidesi mukaan.</p>

	      <ul>
        <li>Yksi ja sama rajapinta kaikille pankeille tiedostojen lähettämiseen ja vastaanottamiseen, tunnusten- ja sertifikaattien hallintaan. Sertifikaattien automaattinen uudistaminen.
        <li>Integraattorikohtainen API -avain. Tunnukset saman API -avaimen sisällä voivat jakaa sertifikaatteja toisilleen.
        <li>Rekisteröityminen sisältää erilliset `admin`, että `data` -tunnukset. Admin -tunnus vaatii kirjautumisessa salasanan lisäksi SMS koodin. Data -tunnus vain salasanan. Admin -tunnuksella hallinnoidaan mm. PGP avaimia, sertifikaattien jako eri tunnusten välillä (optio) jne.
        <li>Aineiston lähetyksessä mahdollisuus vaatia PGP -allekirjoitetut aineistot
        <li>Erinomainen komentorivityökalu palvelun käyttään (`wscli`)
        <li>Sertifikaattien import ja export -toiminnot
        <li>Kirjautuminen käyttää RSA kryptausta ja challenge-response metodia tietoturvan parantamiseksi. API ajetaan SSL:n yli, mutta kirjautumisen tietoturva on siitä riippumaton.
        <li>Autamme integroinnissa ja tarvittaessa asennamme teille työkalut ja hoidamme boardauksen - rekisteröimme sinut ja hoidamme sertifikaattien enrollauksen puolestasi
        <li>Paranneltu <a href="https://isecurefi.github.io/wscli-php/">WSCLI PHP SDK ja client</a> helppoa integroimista varten.
        <li><a href="https://github.com/isecurefi/wscli-php">WSCLI SDK ja client - GitHub repository</a>
        <li><a href="https://isecure.fi/wsapi_v2.json">WSAPI v2 Swagger API rajapintakuvaus JSON -muodossa</a>
        <li><a href="https://isecure.fi/wsapi_v2/index.html">WSAPI v2 API Dokumentaatio</a>
	      </ul>
            </div>
            <div class="col-md-4 blue-text">
	      </ul>
              <a href="#contact" class="btn btn-primary">Kysy Lis&auml;&auml;</a>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <hr>
    <?php include('contact.php'); ?>
    <hr>
    <?php include('footer.php'); ?>
    <?php include('end.php'); static_page(); ?>
  </body>
</html>
