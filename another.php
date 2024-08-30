<?php
$x = 2;
switch ($x) {
    case 1:
        print("hello world");
        break;
    case 2:
        print("maybe world");
        break;
    case 3:
        print("bye world");
        break;
    default:
        print("gooaaal!!");
        break;
}
$x = ['mango', 'orange', 'pawpaw'];
foreach ($x as $item) {
    echo "<br>" . $item;
}


?>
<script>
    let x = ["mango", "orange", "pawpaw"];
    x.forEach((item) => {
        console.log(item);
    })
</script>