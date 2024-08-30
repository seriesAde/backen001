<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP 001</title>
</head>

<body>
    <?php
    $name = "Series";
    $age = "28";
    $height = "5'10";
    ?>
    <section>
        <div>Name: <?php echo $name ?></div>
        <div>Age: <?php echo $age ?></div>
        <div>Height: <?php echo $height ?></div>
        <?php
        echo "<br>";
        $x = 3;
        $y = 1;
        $z = 2;
        if ($x == $y) {
            print("hello world");
        } elseif ($x == $z) {
            print("maybe world");
        } else {
            print("bye world");
        }
        ?>
    </section>
</body>
<script>
    let x = 2;
    let y = 3;
    let z = 1;
    if (x == y) {
        console.log("hello world");
    } else if (x == z) {
        console.log("shut up");
    } else {
        console.log("shut down");
    }
</script>

</html>