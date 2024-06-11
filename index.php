<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>PHP Learning</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <h3>Julhiiiiiiiiiiiinha</h3>
    <?php
    //W3 PHP Variables
    $x = 10;
    $y = 20;
    $joao = "João";
    echo "x = ".$x."/ y = ".$y."/ x+y = ".$x+$y;
    echo "<br> I have $x apples and ".$y." oranges <br>";
    /* You can't merge two data types
    echo $x+$joao; INT + STRING
    
    DATA TYPES:
    
    String "abc"
    Integer 123
    Float (also called double) 1.123 
    Boolean
    Array
    Object
    NULL
    Resource
    */
    //To get the data type:
    echo gettype($x)."<br>";
    var_dump($x); echo "<br>"; var_dump([2, 3, 56]); echo "<br>";
    var_dump(NULL); echo "<br>";

    function teste(){
      echo "Function Test:";
      global $x;
      echo "<br> Now i have x value: ".$x;
    }
    teste();
    function teste2() {
      $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    teste2();
    echo "<br> Now i have y value: ".$y."<br>";
    function teste3(){
      static $x = 0;
      echo "plus ".$x."<br>";
      $x++;
    }
    teste3();
    teste3();
    teste3();
    ?>
  </body>
</html>