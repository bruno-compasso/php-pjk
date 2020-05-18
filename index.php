<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $name = 'Bruno';
  $age = "23";
  $foo = TRUE;
  $floatNumber = 1.24;

  echo gettype($name);

  if ($age > 18) {
    echo "<p>$name is an adult</p>";
    echo "<p>$foo</p>";
    echo (int) (25 / 7);
    echo "<p>$floatNumber</p>";
  }
  ?>
</body>

</html>