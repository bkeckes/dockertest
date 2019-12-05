<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shop</title>
  </head>
  <body>
      <h1>Produkte</h1>
      <ul>
          <?php
            $json = file_get_contents('http://productservice');
            $obj = json_decode($json);

            $products = $obj->product;


			      error_log('see prods');

            foreach ($products as $prod){
              echo "<li>$prod</li>";
            }
          ?>
      </ul>

      <br>
      <ul>
        <li><a href="/usermanagement/">usermanagement</a></li>
        <li><a href="/static/">staticpage</a></li>
        <li><a href="/product/">product</a></li>
      </ul>
  </body>
</html>
