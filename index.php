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
    //W3 PHP Echo/Print to Strings

    /* echo has no return value while print has a return
    value of 1 so it can be used in expressions. echo can
    take multiple parameters (although such usage is rare)
    while print can take one argument. echo is marginally 
    faster than print */

    $txt1 = "Hello";
    
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    echo "<br>";
    echo "<h2>PHP!</h2>";
    print "<h5>" . $txt1 . "</h5>";

    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    function br(){
      echo "<br>";
    }
    
    class Car {
      public $color;
      public $model;
      public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
      }
      public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
      }
    }

    
    $myCar = new Car("red", "Volvo");
    var_dump($myCar);
    echo "<br>";
    echo $myCar -> message(),"<br>";

    $x = 5;
    $x = (string) $x;
    var_dump($x); echo "<br><br>";

    $z = "JoHn Waltz";
    echo "Hello $z"; br();
    echo 'Hello $z'; br();
    echo strtoupper($z); br();
    echo strtolower($z); br();
    echo str_replace("Waltz", "Dolly", $z); br();
    echo strrev($z);br();
    echo trim($z);br();
    $w = explode(" ", $z);
    print_r($w); br();
    $char1; 
    $char2 = "dia";
    //Concatenate:
    $char3 = $z ." ". $char2;
    echo $char3; br();
    $char4 = "$z $char2";
    echo $char4; br();
    echo substr($z, 7); br();
    echo substr($z, 2, 7); br();
    echo substr($z, -2, 3); br();
    echo strlen($z); br();
    $char5 = "We are the so-called \"Vikings\" from the north.";
    echo $char5; br();
    /*
    \'	Single Quote	
    \"	Double Quote	
    \$	PHP variables	
    \n	New Line	
    \r	Carriage Return	
    \t	Tab	
    \f	Form Feed	
    \ooo	Octal value	
    \xhh	Hex value
    */
    ?>
  </body>
</html>