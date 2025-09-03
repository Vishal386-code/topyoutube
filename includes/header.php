<?php
// Define BASE_URL dynamically like in your first example
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$basePath = rtrim(str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', realpath(__DIR__ . '/..'))), '/');
define('BASE_URL', $protocol . $host . $basePath . '/');

// Optionally define a dynamic title
$pageTitle = "TopYouTube.com | Trending Videos Reimagined";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="Discover the latest trending YouTube videos by category, region, and more. Updated daily with top rankings and insights." />
    <meta name="keywords" content="YouTube, trending videos, top YouTube, video rankings, music, gaming, tech, news, entertainment, sports" />
    <meta name="author" content="TopYouTube" />
    <link rel="icon" href="<?= BASE_URL ?>public/assests/images/fav.ico" />
    <link href="<?= BASE_URL ?>public/assests/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assests/css/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?= BASE_URL ?>public/assests/css/style.css" />
  </head>
  <body>
