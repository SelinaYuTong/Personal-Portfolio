<?php

function sanitizeinput($string="") {
  return htmlspecialchars(strip_tags(trim(($string))));
}

function redirectto($location) {
  header("Location: " . $location);
  exit;
}

function isPostRequest() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function isGetRequest() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

?>
