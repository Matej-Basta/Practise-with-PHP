<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    function element($element, $innerhtml = "", $attributes = "")
    {
      return "<{$element} {$attributes}>{$innerhtml}</{$element}>";
    }

    echo element("p");
    echo element("p", "");
    echo element("p", "some text");
    echo element("p", "some text", "class='foo'");

    function convert_weight($value, $unit = "kg")
    {
        switch($unit) {
            case "kg":
                return $value * 2.20462262 . "<br>";
                break;
            case "lb":
                return $value / 2.20462262 . "<br>";
                break;    
        }
    }

    echo convert_weight(1, "lb");
    echo convert_weight(1, "kg");
   
    echo convert_weight(10, "lb");
     echo convert_weight(1);

    ?>
</body>
</html>