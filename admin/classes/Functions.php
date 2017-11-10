<?php
/**
 * Created by PhpStorm.
 * User: trong.hh
 * Date: 11/10/2017
 * Time: 10:45 AM
 */
// Hàm điều hướng trang
class Redirect {
  public function __construct($url = null) {
    if ($url)
    {
      echo '<script>location.href="'.$url.'";</script>';
    }
  }
}

?>