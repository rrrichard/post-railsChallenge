<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Posts and Railings Challenge</title>
    <link rel= "stylesheet" type="text/css" href= "normalize.css">
</head>
<body>
<pre>
PHP Posts and Railings Challenge

Overview:
Create a PHP application that can calculate the amount of posts and railings required to build a fence of a certain length or that will calculate the length of a fence when you provide the amount of posts and railings.

Requirements:
Must be built using PHP
Must have a basic user interface for specifying amount of posts and railings and length of fence
Must have a minimal front end, no CSS and as little HTML as possible
Must be able to calculate the length of a fence when provided the amount of posts and the amount of railings
Must be able to calculate the amount of posts and railings needed when provided the length of fence required
All fences must start and end with a post and must contain at least 1 railing
Railings must have a post between them to connect them, posts cannot sit next to other posts
When calculating the amount of posts and railings needed to cover a certain length fence, the result must span at least the length required, no less
Fence length results must be displayed in meters with no more than 2 decimal places
Code must be Unit Tested!
Code must use functions or OOP (classes)

Specification:
A railing is 1.5m long
A post is 10cm wide

</pre>

<h3>Please enter how long do you want your fence to be.</h3>
<form method="post" action="length_to_fence.php">
    Please choose the type of measurement you want
    <br>
    <input type="radio" name="measurement" value="1000" checked>meter
    <input type="radio" name="measurement" value="10">centimeter
    <input type="radio" name="measurement" value="1">millimeter
    <br>
    <input type="text" name="num_length" placeholder="Enter number" required>Enter length of fence
    <input type="submit">
</form>
<h3>Please enter how many posts and railings do you want your fence to have.</h3>
<h5>THE NUMBER OF POSTS MUST BE ONE MORE THAN THE NUMBER OF RAILINGS</h5>
<form method="post" action="fence_to_length.php">
    <input type="text" name="num_posts" placeholder="Enter number" required>Number of posts
    <input type="text" name="num_railings" placeholder="Enter number" required>Number of railings
    <input type="submit">
</form>



</body>
</html>
