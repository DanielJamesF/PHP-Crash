<?php
/* --------- Operators --------- */
/*
    < Less than
    > Greater than
    <= Less than or Equal to
    >= Greater than or Equal to
    == Equal to
    === Identical to
    != Not Equal to
    !== Not Identical to
*/
/* --------- If Statements --------- */
/*
** If Statement Syntax
If (condition) {
    // code to be executed if condition is true
}
*/
$age = 17;
// if ($age >= 18) {
//     echo 'You are old enough to vote';
// } else {
//     echo 'Sorry, you are not old enough to vote';
// }

$t = date("H");
// if ($t < 12) {
//     echo 'Good Morning';
// } elseif ($t < 17) {
//     echo 'good Afternoon';
// }else {
//     echo 'Goode Evening';
// }
$posts = [];
// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No Posts';
// }
// echo !empty($posts) ? $posts[0] : 'No Posts';
// $firstPost = !empty($posts) ? $posts[0] : null;
// $firstPost = $posts[0] ?? null;
// echo $firstPost;
$favcolor = '';
switch($favcolor) {
    case 'red':
        echo 'Your favourite color is red';
        break;
    case 'blue':
        echo 'Your favourite color is blue';
        break;
    case 'green':
        echo 'Your favourite color is green';
    default:
    echo 'Your favourite color is not red, blue, pr green';
}