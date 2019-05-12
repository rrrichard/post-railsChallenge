<?php

if (isset($_POST['measurement'])){
    $measurement = $_POST['measurement'];
}

if (isset($_POST['num_length'])){
    $length = $_POST['num_length'];
}

$startEndPost = 200;
$inputLength = $length * $measurement;
$startValue =  $inputLength - $startEndPost;
$postCount = floor($startValue / 1600) + 2;
$railingCount = $postCount - 1;

/**
 * this function combines the value of the $postCount and $railingCount
 *
 * @param int $postCount number of posts based on the calculation above
 *
 * @param int $railingCount number of railings which is always 1 less than the number of posts
 *
 * @return string returns 2 both parameters with the words 'posts' and 'railings' next to them
 */
function output(int $postCount, int $railingCount) : string {
    return $postCount . ' posts' . '<br>' . $railingCount . ' railings';
}

if (is_numeric($length)){
    echo output($postCount, $railingCount);
} else {
    echo 'Please enter integers, not words';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Posts and Railings Challenge</title>
</head>
<body>
<br>
<a href="main_page.php">Click here to go back</a>
</body>
</html>
