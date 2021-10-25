<?php
session_start();
$page = $_GET['page'] ?? 'home';

require_once './functions/forms.php';


function clearString($str)
{
  return trim(htmlentities($str));
}

function dump($arr)
{
  echo '<pre>' . print_r($arr, true) . '</pre>';
}

function redirect($page)
{
  header('Location: index.php?page=' . $page);
  die();
}

function setMessage($text, $type = 'success')
{
  $_SESSION['flash'] = compact('text', 'type');
}

function showMessage()
{
  if (isset($_SESSION['flash'])) {
    extract($_SESSION['flash']);
    echo "<div class='alert alert-$type'>$text</div>";
    unset($_SESSION['flash']);
  }
}
