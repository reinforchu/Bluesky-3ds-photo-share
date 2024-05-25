<?php
if (empty($_SERVER['QUERY_STRING'])) exit('Error: [0]Null or empty.');
if (!preg_match('/^[A-Za-z0-9]+$/i', $_SERVER['QUERY_STRING'], $matches, PREG_OFFSET_CAPTURE)) exit('Error: [1]Invaild query.');
$md5FileName = $_SERVER['QUERY_STRING'];
if (!file_exists('./files/'.$md5FileName.'.JPG')) exit('Error: [2]Not found.');
?><!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="<?php echo './files/'.$md5FileName.'.JPG'; ?>">
    <title>3DS Photo share for Bluesky</title>
  </head>
  <body>
    <img src="<?php echo './files/'.$md5FileName.'.JPG'; ?>" alt="image">
  </body>
</html>