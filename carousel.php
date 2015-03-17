<?php 
function carousel($pageNum)
{
?>
<header id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" <?php if ($pageNum == 1) echo 'class="active"'; ?> ></li>
    <li data-target="#myCarousel" data-slide-to="1" <?php if ($pageNum == 2) echo 'class="active"'; ?> ></li>
    <li data-target="#myCarousel" data-slide-to="2" <?php if ($pageNum == 3) echo 'class="active"'; ?> ></li>
  </ol>

  <div class="carousel-inner first">
    <!-- Wrapper for slides -->
    <div class="item<?php if ($pageNum == 1) echo ' active';?> carousel-first">
      <img src="images/isecure_header1_b.png" style="max-height:90%;max-width:90%;margin-left:auto;margin-right:5%;margin-top:auto;margin-bottom:auto;padding-top:1%;">
      <div class="carousel-caption col-xs-10 col-sm-6 col-md-4">
        <h1>WS-Kanava</h1>
	<h3>Kun tarvitset liikeideaasi tai asiakas-projektiasi varten pankkiyhteyskanavan tai haluat automatisoida pankkiaineistojen käsittelyä</h3>
        <a href="#ws-kanava" class="btn btn-primary">Mik&auml; WS-Kanava?</a><br><br>
      </div>
    </div>

    <!-- Wrapper for slides -->
    <div class="item<?php if ($pageNum == 2) echo ' active';?> carousel-second">
      <img src="images/kustom.png" style="max-height:80%;max-width:90%;margin-left:auto;margin-right:10%;margin-top:auto;margin-bottom:auto;padding-top:2%;">
      <div class="carousel-caption col-xs-10 col-sm-6 col-md-4">
        <h1>WS-Kustom</h1>
	<h3>Olet suunnittelemassa omaa palvelua ja tarvitset teknistä apua WS-Kanavan käytössä. Me osaamme pankkiyhteysasiat ja räätälöinnin.</h3>
	<a href="ws-kustom.php" class="btn btn-primary">WS-Kustom</a><br><br>
      </div>
    </div>

    <!-- Wrapper for slides -->
    <div class="item<?php if ($pageNum == 3) echo ' active';?> carousel-third">
      <img src="images/varainkeruu3.png"  style="max-height:90%;max-width:90%;margin-left:auto;margin-right:10%;margin-top:auto;margin-bottom:auto;padding-top:1%;">
      <div class="carousel-caption col-xs-10 col-sm-6 col-md-4">
        <h1>WS-Ker&auml;ysStatus</h1>
	<h3>KeräysStatus-palvelu tekee käteis- ja verkkomaksukeräyksistä helpompaa, hallitumpaa ja paremmin seurattavaa</h3>
	<a href="ws-keraysstatus.php" class="btn btn-primary">WS-Ker&auml;ys</a><br><br>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>
</header>
<?php
}
?>
