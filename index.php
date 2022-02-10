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

    // echo element("p");
    // echo element("p", "");
    // echo element("p", "some text");
    // echo element("p", "some text", "class='foo'");

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

    // echo convert_weight(1, "lb");
    // echo convert_weight(1, "kg");
   
    // echo convert_weight(10, "lb");
    //  echo convert_weight(1);

    $students = [];
    $students[] = "Thomas";
    $students[] = "Kathy";
    array_push($students, "Evelin");
    $students[] = "Bernard";
    
    // // echo var_dump($students);
    // foreach($students as $element) {
    //     echo $element . "<br>";
    // }

    $divisible_by_seven = [];
    for ($i = 0; $i < 101; $i++) {
        if ($i % 7 === 0) {
            $divisible_by_seven[] = $i;
        }
    }

    // echo var_dump($divisible_by_seven);

    // foreach($divisible_by_seven as $number) {
    //     echo $number . "<br>";
    // }

    // $cast_crew = [];
    // $cast_crew["cast"] = [];
    // $cast_crew["cast"][] = "John David Washington";
    // $cast_crew["cast"][] = "Robert Pattison";
    // $cast_crew["cast"][] = "Elizabeth Debicki";
    // $cast_crew["director"][] = "Christopher Nolan";

    // echo var_dump($cast_crew);
    // foreach($cast_crew as $array) {
    //     foreach($array as $person) {
    //         echo $person . "<br>";
    //     }
    // }

    $cast_crew = [
        "actors" => [],
        "directors" => [],
    ];

    $people = [
    [
        "name" => "John David Washington",
        "job" => "actor"
    ],
    [
        "name" => "Robert Pattinson",
        "job" => "actor"
    ],
    [
        "name" => "Christopher Nolan",
        "job" => "director"
    ],
    [
        "name" => "Steven Spielberg",
        "job" => "director"
    ],
    [
        "name" => "Michael Caine",
        "job" => "actor"
    ]
    ];

    // echo var_dump($cast_crew);

    foreach($people as $array) {
        if($array["job"] === "actor") {
            $cast_crew["actors"][] = $array["name"];
        } else {
            $cast_crew["directors"][] = $array["name"];
        }
    }

    // echo var_dump($cast_crew);
    

    $default_values = [
        "title" => null,
        "year" => null,
        "plot" => null,
        "duration" => null,
    ];

    $movie = [
        "title" => "Tenet",
        "year" => 2020,
        "rating" => 7.5,
        "duration" => 150,
    ];

    $movie = array_merge($default_values, $movie);

    // echo var_dump($movie);

    $movies = [
    [
        "title" => "Dunkerk",
        "year" => 2017,
        "pg" => 13,
        "favourite" => false
    ],
    [
        "title" => "Tenet",
        "year" => 2020,
        "pg" => 13
    ],
    [
        "title" => "Interstellar",
        "year" => 2014,
        "pg" => 13,
        "favourite" => false
    ],
    [
        "title" => "Inception",
        "year" => 2010,
        "pg" => 13,
        "favourite" => true
    ],
    [
        "title" => "The Prestige",
        "year" => 2006,
        "pg" => 13
    ],
    [
        "title" => "Batman begins",
        "year" => 2005,
        "pg" => 12,
        "favourite" => true
    ],
    [
        "title" => "The Dark Knight",
        "year" => 2008,
        "pg" => 12,
        "favourite" => true
    ],
    [
        "title" => "The Dark Knight Rises",
        "year" => 2012,
        "pg" => 12,
        "favourite" => false
    ],
];

    $favourite_movies = [];
    foreach($movies as $movie) {
        if(isset($movie["favourite"])) {
            if ($movie["favourite"] === true) {
                $favourite_movies[] = $movie;
            };
        };
    };

    // echo var_dump($favourite_movies);
    ?>

    <?php
    // is the current user administrator?
    $user_is_admin = false;
?>
 
<ul class="menu">
    
    <li><a href="#">Home</a></li>
    <li><a href="#">Eshop</a></li>
    <li><a href="#">Contact</a></li>
    <?php if ($user_is_admin) : ?>
    <li><a href="#">Link just for administrators</a></li>
    <li><a href="#">Another link just for administrators</a></li>
    <?php endif; ?>
    
    
</ul>
</body>
</html>