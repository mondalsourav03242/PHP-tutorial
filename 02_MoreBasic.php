<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutoria2</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        padding:23px;
    }

    .container {
        max-width: 80%;
        /* height:53px; */
        background-color: rgb(216, 161, 161);
        margin: auto;
    }
</style>

<body>
    <div class="container">
        <h1>Lets learn about php</h1>
        <p>  Your party status is here:</p>
        <?php 
      $age=19;
      if($age>18){
        echo "You can go to the party";

      }
      else{
        echo "You can not go to the party";
      }

      $languages=array("php","Java","javascript","C++","c","python");
    //   echo $languages[0];echo "<br>";
    //   echo count($languages);

echo "<br>";
    // 
    // WHILE LOOP IN PHP

    // $a=0;
    // while ($a <= 10) {
    //     echo "The value of a is $a";
    //     echo "<br>";
    //     $a++;
    // }

    // FOR LOOP IN PHP

    // for($a=0;$a<=10;$a++){
    //     echo "The value of a is $a";
    //     echo "<br>";
    // }

    // // DO WHILE LOOP IN PHP
    // $a=0;
    // do{
    //     echo "The value of a is $a";
    //     echo "<br>";
    //     $a++;
    // }
    // while($a<=10);

    // ARRAY ITERATION
    $a=0;
    while ($a < count($languages)) {
        echo "The value of language $a th position  is $languages[$a]";
        echo "<br>";
        $a++;
    }
    foreach($languages as $value){
        echo "the value of languge is $value <br>";
        
    }
    function sum($a,$b){
        $sum=$a+$b;
        echo $sum;
    }
    sum(3,5);


    
      ?>
    </div>
</body>

</html>