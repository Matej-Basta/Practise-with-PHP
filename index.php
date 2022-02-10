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
    echo element("p", "some text", "class='foo'")

    ?>
</body>
</html>