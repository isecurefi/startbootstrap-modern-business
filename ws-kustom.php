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
            <div class="col-md-4 blue-text">
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
