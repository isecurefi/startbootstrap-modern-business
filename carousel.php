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

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item<?php if ($pageNum == 1) echo ' active';?>">
                <div class="fill" style="background-image:url('images/isecure_header1_b.png');"></div>
                <div class="carousel-caption">
                    <h2>WS-Kanava</h2>
		    <h4>Kun tarvitset liikeideaasi tai
		    asiakas-projektiasi varten pankkiyhteyskanavan tai
		    haluat automatisoida pankkiaineistojen käsittelyä</h4>
                </div>
            </div>
            <div class="item<?php if ($pageNum == 2) echo ' active';?>">
                <div class="fill" style="background-image:url('images/isecure_ws1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>WS-Kustom</h2>
		    <h4>Olet suunnittelemassa omaa palvelua ja
		    tarvitset teknistä apua WS-Kanavan käytössä. Me
		    osaamme pankkiyhteysasiat ja räätälöinnin.</h4>
                </div>
            </div>
            <div class="item<?php if ($pageNum == 3) echo ' active';?>">
                <div class="fill" style="background-image:url('images/isecure_header_6.png');"></div>
                <div class="carousel-caption">
                    <h2>WS-Ker&auml;sStatus</h2>
		    <h4>KeräysStatus-palvelu tekee käteis- ja
		    verkkomaksukeräyksistä helpompaa, hallitumpaa ja
		    paremmin seurattavaa</h4>
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
