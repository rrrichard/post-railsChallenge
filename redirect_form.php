<?php

$choice = $_POST['choice'];


if ($choice == "fence_to_length"){
    header('Location: fence_to_length.php');
}
if ($choice == "length_to_fence"){
    header('Location: length_to_fence.php');
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
    <form method="post" action="redirect_form.php">
        <input type="radio" name="choice" value="fence_to_length">Calculate the length of a fence
        <input type="radio" name="choice" value="length_to_fence">Calculate the amount of posts and railings needed
        <input type="submit">
    </form>
</body>
</html>
