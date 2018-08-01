<?php 
function carousel($pageNum)
{
?>
<header id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" <?php if ($pageNum == 1) echo 'class="active"'; ?> ></li>
    <li data-target="#myCarousel" data-slide-to="1" <?php if ($pageNum == 2) echo 'class="active"'; ?> ></li>
  </ol>

  <div class="carousel-inner first">
    <!-- Wrapper for slides -->
    <div class="item<?php if ($pageNum == 1) echo ' active';?> carousel-first">
      <img src="images/isecure_header1_b.png" style="max-height:90%;max-width:90%;margin-left:auto;margin-right:5%;margin-top:auto;margin-bottom:auto;padding-top:1%;">
      <div class="carousel-caption col-xs-10 col-sm-6 col-md-4">
        <h1>WS-Kanava</h1>
	<h3>Kun tarvitset liikeideaasi tai asiakas-projektiasi varten pankkiyhteyskanavan tai haluat automatisoida pankkiaineistojen käsittelyä</h3>
        <a href="ws-kanava.html" class="btn btn-primary">WS-Kanava</a><br><br>
      </div>
    </div>

    <!-- Wrapper for slides -->
    <div class="item<?php if ($pageNum == 2) echo ' active';?> carousel-second">
      <img src="images/kustom.png" style="max-height:90%;max-width:90%;margin-left:auto;margin-right:20%;margin-top:auto;margin-bottom:auto;padding-top:2%;">
      <div class="carousel-caption col-xs-10 col-sm-6 col-md-4">
        <h1>WS-Kanava API</h1>
	<h3>Yksi ja sama API rajapinta integraatiotasi varten kaikille pankeille. Skaalautuu automaattisesti tarpeidesi mukaan.</h3>
	<a href="ws-api.html" class="btn btn-primary">WS-Kanava API</a><br><br>
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
