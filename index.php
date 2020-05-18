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
  $hobbies = array("procrastinating", "sleeping", "gaming");

  echo gettype($name);

  if ($age > 18) {
    echo "<p>$name is an adult</p>";
    echo "<p>$foo</p>";
    echo (int) (25 / 7);
    echo "<p>$floatNumber</p>";
    echo '<p>this is a simple string</p>';

    echo "You can also have embedded newlines in
    strings this way as it is
    okay to do";
  }

  echo "<p>Hi my name is ${name}, and my favorite hobby is $hobbies[1]</p>";
  echo "<p>Hey " . "there, " . "my name is $name</p>";
  echo "<p><i>\$hobbies</i> is an " . gettype($hobbies) . "</p>";
  echo serialize($hobbies);
  var_dump($hobbies);
  ?>
</body>

</html>