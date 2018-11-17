<?php
function ib64($img) {
    print('data:image/' .
          pathinfo($img, PATHINFO_EXTENSION) .
          ';base64,' .
          base64_encode(file_get_contents($img)));
}
?>