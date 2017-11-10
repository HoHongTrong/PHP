<?php
/**
 * Created by PhpStorm.
 * User: trong.hh
 * Date: 11/10/2017
 * Time: 10:40 AM
 */

// Lớp session
class Session {
  // Hàm bắt đầu session
  public function start()
  {
    session_start();
  }

  // Hàm lưu session
  public function send($user)
  {
    $_SESSION['user'] = $user;
  }

  // Hàm lấy dữ liệu session
  public function get()
  {
    if (isset($_SESSION['user']))
    {
      $user = $_SESSION['user'];
    }
    else
    {
      $user = '';
    }
    return $user;
  }

  // Hàm xoá session
  public function destroy()
  {
    session_destroy();
  }
}

?>