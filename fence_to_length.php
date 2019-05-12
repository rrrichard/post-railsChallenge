<?php

if (isset($_POST['num_posts'])){
    $num_posts = $_POST['num_posts'];
}

if (isset($_POST['num_railings'])){
    $num_railings = $_POST['num_railings'];
}

class Fence
{
    public $post = 100;
    public $railing = 1500;

    public function calcLength($num_posts, $num_railings){
        if (($num_posts - 1) == $num_railings) {
            $fenceLength = (100 * $num_posts) + (1500 * $num_railings);
            return $fenceLength / 1000 . 'm';
        }
        else return 'The number of railings must be one less than the number of posts';
    }
}

$test = new Fence();
$result = $test->calcLength($num_posts,$num_railings);

if (is_numeric($num_posts) && is_numeric($num_railings)){
    echo $result;
} else {
    echo 'Please enter integers, not words';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Posts and Railings Challenge</title>
    <link rel= "stylesheet" type="text/css" href= "normalize.css">
    <!--    <link rel= "stylesheet" type="text/css" href= "style.css">-->
</head>
<body>
<br>
<a href="main_page.php">Click here to go back</a>
</body>
</html>