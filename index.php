<?php include_once('lang.php'); ?>
<!DOCTYPE html>
<html lang="<?php global $lang; echo htmlentities($lang); ?>">
  <head>
    <?php include('header.php'); ?>
    <title>ISECure Oy</title>
    <link rel="canonical" href="https://www.isecure.fi/index.html">
  </head>
  <body>
    <?php include('navigation.php'); ?>
    <?php include('carousel.php'); carousel(1); ?>
    <?php include('supportedbanks-fluid.php'); ?>
    <?php include('frontpage.php'); ?>
    <?php include('contact.php'); ?>
    <hr>
	<?php include('references.php'); ?>
    <hr>
    <br>
    <?php include('ws-info.php'); ?>
    <?php include('footer.php'); ?>
    <?php include('end.php'); dynamic(); ?>
  </body>
</html>
