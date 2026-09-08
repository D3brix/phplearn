<?php
$test = 10;
$test = 3.1;
$test = "Hello";
$test = "opilane";
$test = true;
$test = false;
$test = NULL;
$test = [1, null, true, "lol", 2, 3.2];
$test = new stdClass();
$test->name = "Gerru";



var_dump($test);


?>


<?php

$test = true;
$test = false;
$test = true && false;
$test = true || false;
$test = !true;
$test = (true && false) || false || true;
$test = (true && false) || false || (true && false);
$test = true xor false;




var_dump($test);




?>

<?php

$test = 10 > 5;
$test = 10 < 5;
$test = 10 == 10;
$test = 10 <= 10;
$test = 10 >= 10;
$test = 10 == "10";
$test = 10 === "10";
$test = 10 != "10";
$test = 10 !== "10";
$test = [] == false;
$test = 0 == false;

var_dump($test);

?>


<?php

$test = array(1, 2, 3);
$test = [1, 2, 3];
$test = array("name" => "Gerru", "age" => 18); 
$test = ["name" => "Gerru", "age" => 18];
$test = [1, "asdas", true, [1,2,3]];
$test = [
    "name" => "Gerru",
    "age" => 18,
]






var_dump($test);
var_dump($test[3][1]);