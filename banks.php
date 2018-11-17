<?php
function ib64($img) {
    print('data:image/' .
          pathinfo($img, PATHINFO_EXTENSION) .
          ';base64,' .
          base64_encode(file_get_contents($img)));
}
?>
<div class="row">
  <div class="col-md-12">
    <br>
    <center>
      <img src="<?php ib64('images/bank_icons/aktia_logo.png'); ?>" class="bank-icon">
      <img src="<?php ib64('images/bank_icons/alandsbanken_logo.gif'); ?>" class="bank-icon">
      <img src="<?php ib64('images/bank_icons/handelsbanken_logo.gif'); ?>" class="bank-icon">
      <img src="<?php ib64('images/bank_icons/nooa_logo.gif'); ?>" class="bank-icon">
      <img src="<?php ib64('images/bank_icons/nordea_logo.gif'); ?>" class="bank-icon">
      <img src="<?php ib64('images/bank_icons/oko_logo.gif'); ?>" class="bank-icon">
      <img src="<?php ib64('images/bank_icons/pop_logo.png'); ?>" class="bank-icon">
      <img src="<?php ib64('images/bank_icons/sampo_logo.png'); ?>" class="bank-icon">
      <img src="<?php ib64('images/bank_icons/spankki_lahitapiola.png'); ?>" class="bank-icon">
      <img src="<?php ib64('images/bank_icons/SEBlogo.png'); ?>" class="bank-icon">
    </center>
  </div>
</div>
