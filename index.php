<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $name   = "PHP Store";
    $credit = 1000;

    echo "<h1>Welcome to " . $name . "!</h1>";
    echo "<h2>You have $" . $credit . " in your wallet.</h2>";

    $products['Computer']  = 750;
    $products['Car']       = 15000;
    $products['iPhone']    = 1000;
    $products['Toaster']   = 75;

    foreach ($products as $key => $value) {
      // code...
      echo "<p>The " . $key . " costs " . $value . "</p>";
    }

    echo "<h2>Items you can afford</h2>";

    foreach ($products as $key => $value) {
      // code...
      if ($value <= $credit) {
        echo "<p>" . $value . "</p>";
      }
    }
     ?>
  </body>
</html>
