<?php
  $badText = $_GET["badText"];
  $text = "Ehi sai che sei un grandissimo stronzo?!";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Badwords</title>
</head>
<body>
  <h1>Badwords</h1>
  <p><b>Testo:</b> <?php echo $text ?> ;</p>
  <p><b>Lunghezza testo:</b> <?php echo strlen($text); ?> caratteri ;</p>
  <p><b>Testo censurato:</b> <?php echo str_replace($badText, "***", $text) ?> ;</p>
</body>
</html>
