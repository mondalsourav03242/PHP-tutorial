<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">This is my first php website
    <?php
      echo "hello world and this is printed using php";
    //   variable in php
      $variable1=23;
      $variable2=45;
      echo $variable1;
      echo $variable2;
      echo $variable1+$variable2;
      echo "<br>";
      echo "the sum of variable one and two is ";
      echo $variable1+$variable2;
      echo "<br>";
      echo "<h1>hii i am sourav</h1>";
      echo var_dump(1==4);
      echo var_dump(1!=4);
      echo var_dump(1>4);
      echo var_dump(1<4);

    //   datatypes
    echo "<br>";
    $var1="This is a string";
    echo var_dump($var1);
    echo "<br>";
    $var2=64;
    echo var_dump($var2);
    echo "<br>";
    $var3=true;
    echo var_dump($var3);
    echo "<br>";
    $var4=[1,2,3,4,5];
    echo var_dump($var4);
    $var5

    ?>
    </div>
    
</body>
</html>