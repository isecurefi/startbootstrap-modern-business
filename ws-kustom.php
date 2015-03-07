<?php include('header.php'); ?> 
<body>

    <!-- top navigation -->
    <?php include('navigation.php'); ?>

    <!-- Header Carousel -->
    <?php include('carousel.php'); carousel(2); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ISECure WS-Kustom</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-md-8">
	      <p>KONSULTOINTI JA RÄÄTÄLÖINTI INTEGROINTITARPEISIIN JA
	      OMAA TUOTETTA KEHITTÄVILLE YRITYKSILLE</p>
 
	      <p>Oletko kehittämässä omaa palvelua tai tuotetta, jossa
	      hyödynnät WS-kanavaa? Tarjoamme konsultointiapua
	      mm. seuraavien toimintojen kehittämiseen:</p>

	      <ul>
		<li>Pankkiaineistojen käsittely, formaattimuunnokset (esim. JSON), tietokantatallennukset, jne.
		<li>Integraatiorajapinnat ISECure WS-Kanavaan
		<li>Raporttien muodostukset pankkiaineistojen pohjalta
		<li>eLaskujen lähettäminen ja seuranta, sekä eLaskun vastaanottajien laskutusosoitteiden vastaanottaminen
		<li>Maksujen lähettäminen omalta tililtä (C2B -aineistot)
		<li>Sekä muita palveluita riippuen pankin tarjoamasta, esimerkiksi:
		  <ul>
		    <li>​Tilitapahtumat, kuluvan päivän tapahtumat
		    <li>Luotto-/pankkikorttitapahtumien listaus (credit/debit) maksupäätepalveluista
		    <li>Reaaliaikasaldot
		    <li>Suoraveloitukset
		    <li>Palkkojen ja eläkkeiden maksaminen
		  </ul>
	      </ul>
            </div>
            <div class="col-md-4">
	      <p>Muut lisäpalvelut</p>
	      <ul>
		<li>Asiakasrekisterit: Olennainen osa ryhmien
		hallintaan erityisesti isoissa
		organisaatioissa. Maksutapahtumiin yhdistetystä
		asiakastiedosta saa automaattisesti statistiikkaa.
		<li>Interaktiiviset tilastot: Lataa automaattisesti
		konekieliset tiliotteet ja viitesiirrot ja yhdistää
		korkealaatuisen JS-kirjaston kanssa interaktiivisten
		statistiikkojen luomiseksi.
		<li>eMaksu-napit: Tarjoamme eMaksu- eli
		verkkomaksupainikkeet Osuuspankille, Nordealle sekä
		DanskeBankille. Toteutus myös muille pankeille
		tarvittaessa.
	      </ul>
              <a href="#" class="btn btn-primary">Kysy Lis&auml;&auml;</a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
            </div>
            <div class="col-md-4 col-md-7">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h4>SELECTED CODE</h4>
                        <p>VALITTUJEN PANKKIEN WS-KANAVIEN KOODI</p>
                    </div>
                    <div class="panel-body">
			<p>Valitsemasi tuetut pankit</p>
			<ul>
			  <li>PHP5 (osin C) lähdekoodi, jonka pohjalta rakennat palvelun tai integraation
			  <li>Luokkapohjainen tai suora funktiokutsu -rajapinta
			  <li>Luokkapohjainen rajapinta lisäksi suojaa jokaisen pankkikoodin omaan prosessiin, jonka PHP rajapintaa voidaan edelleen rajoittaa ja tiukentaa (php-sandbox)
			  <li>Lähdekoodia ei saa jälleemyydä, eikä laittaa avoimeen jakeluun
			</ul>
                        <a href="#" class="btn btn-primary">Kysy Lis&auml;&auml;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-7">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h4>DEVELOPER ACCESS</h4>
			<p>KAIKKIEN PANKKIEN WS-KANAVAT + GITHUB + TUKIPALVELU</p>
                    </div>
                    <div class="panel-body">
 			<ul>
			  <li>"SELECTED CODE": kaikki tuetut pankit
			  <li>Pääsy koodin versionhallintaan (GitHub collaborator)
			  <li>Mahdollisuus osallistua kehitykseen, vaikuttaa ominaisuuksiin ja integrointeihin - koodisi pysyy ajan tasalla
			  <li>Automaattiset testit laadunvalvontaan (CI)
			  <li>Tietoturva- ja korjauspäivitykset
			  <li>Pankkien palvelusertifikaattien päivitykset
			  <li>Pankkien rajapintapäivitykset
			  <li>Tukipalvelu GitHubin tikettijärjestelmän kautta
			  <li>HUOM: Kysy myös erillisenä palveluna valmis ja ajantasainen pankki-integrointiympäristö
			</ul>
                        <a href="#" class="btn btn-primary">Kysy Lis&auml;&auml;</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-md-7">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h4>+HOSTING</h4>
                        <p>WS-KANAVAT PILVIPALVELUNA</p>
                    </div>
                    <div class="panel-body">
			<ul>
			  <li>WS-kanava valitsemillesi pankeille Amazon AWS -pilvipalvelussa
			  <li>Amazon AWS KMS avaintenhallintaan perustuva sertifikaattien suojaus
			  <li>Automaattiset tietoturva- ja korjauspäivitykset
			  <li>Formaattimuunnokset, esim. JSON
			</ul>
                        <a href="#" class="btn btn-primary">Kysy Lis&auml;&auml;</a>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <?php include('footer.php'); ?>

    </div>
    <!-- /.container -->

    <?php include('end.php'); static_page(); ?>

</body>

</html>
