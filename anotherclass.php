<?php
// var_dump(method name) used to print out the items in a variable
// get request are not to be used for sensitive information
// isset is used to stop errors from occurring when variables are not yet defined
// it makes it so that the code only run when variables are defined and errors are are not shown 

$submited = isset($_POST["UserName"],$_POST["submit_test"]);
if ($submited) {
    // var_dump($_POST["UserName"]);
    $username = $_POST["UserName"];
    echo $username;
}
// "include" merges the php file into one
// u cant echo arays u can dump them tho

?>
<!-- GET are used for insensitive information while post is used for sensitive information -->
<!-- <form action="" method="get">
    <input type="text" name="UserName" placeholder="Username">
    <button name="submit_test">Submit</button>
</form> -->
<form action="" method="post">
    <input type="text" name="UserName" placeholder="Username">
    <input type="password" name="Password" placeholder="password">
    <button name="submit_test">Submit</button>
</form>

