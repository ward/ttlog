<?php

  function isName() { return isset($_GET['name']); }
  function isId() { return isset($_GET['id']); }
  function GetName() { return $_GET['name']; }
  function GetId() { return $_GET['id']; }
  function GetIP() { return $_SERVER['REMOTE_ADDR']; }
  function EncryptNameIP($id, $name, $ip) { return md5($id . $name . $ip); }

?>