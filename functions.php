<?php

function render($filename, $data = null) {
  ob_start();
  if (is_array($data) && !empty($data)) {
    extract($data);
  }
  include $filename;
  return ob_get_clean();
}



?>
